<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Designation;
use App\User;
use Entrust;

class UserController extends Controller
{
    //
    public function index()
{
    //dd('here');
    $result = User::latest()->paginate();
    return view('user.index', compact('result'))->withClass('user-list');
}

public function create()
{
    $designations = Designation::pluck('name', 'id');

    $roles = Role::pluck('name', 'id');
    return view('user.new', compact('roles','designations'))->withClass('user-add');
}

public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'bail|required|min:2',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'roles' => 'required|min:1'
    ]);

    // hash password
    $request->merge(['password' => bcrypt($request->get('password'))]);

    // Create the user
    if ( $user = User::create($request->except('roles', 'permissions')) ) {
        $this->syncPermissions($request, $user);
        flash('User has been created.');
    } else {
        flash()->error('Unable to create user.');
    }

    return redirect()->route('users.index');
}

public function edit($id)
{
    $user = User::find($id);
    $roles = Role::pluck('name', 'id');
    $designations = Designation::pluck('name', 'id');
    $permissions = Permission::all('name', 'id');

    return view('user.edit', compact('user', 'roles', 'permissions','designations'))->withClass('user-edit');
}

public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'bail|required|min:2',
        'email' => 'required|email|unique:users,email,' . $id,
        'roles' => 'required|min:1',
    ]);


    // Get the user
    $user = User::findOrFail($id);
    // Update user
    $user->fill($request->except('roles', 'permissions', 'password'));

    // check for password change
    if($request->get('password')) {
        $user->password = bcrypt($request->get('password'));
    }

    // Handle the user roles
   
    $user->roles()->detach();
    foreach($request->roles as $role){
        $user->roles()->attach($role);
    }

    $user->save();
    flash()->success('User has been updated.');
    return redirect()->route('users.index');
}

public function destroy($id)
{
    if ( Auth::user()->id == $id ) {
        flash()->warning('Deletion of currently logged in user is not allowed :(')->important();
        return redirect()->back();
    }

    if( User::findOrFail($id)->delete() ) {
        flash()->success('User has been deleted');
    } else {
        flash()->success('User not deleted');
    }

    return redirect()->back();
}

private function syncPermissions(Request $request, $user)
{
    // Get the submitted roles
    $roles = $request->get('roles', []);
    $permissions = $request->get('permissions', []);

    // Get the roles
    $roles = Role::find($roles);

    // check for current role changes
    if( ! $user->hasRole( $roles ) ) {
        // reset all direct permissions for user
        $user->permissions()->sync([]);
    } else {
        // handle permissions
        $user->syncPermissions($permissions);
    }

    $user->syncRoles($roles);
    return $user;
}
}
