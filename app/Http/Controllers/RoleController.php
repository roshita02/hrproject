<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\Permission;
use Entrust;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('backend.user.role.index',compact('roles'))->withClass('roles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('role.new')->withClass('roles-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
        'name' => 'required|min:2',
    ]);

    $owner = new Role();
    $owner->name         = $request->name;
    $owner->display_name = $request->display_name; // optional
    $owner->description  = $request->description; // optional
    $owner->save();
    return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $roles = Role::find($id);

    return view('role.edit', compact( 'roles'))->withClass('role-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
        'name' => 'required|min:2',
    ]);
    $owner = Role::findOrFail($id);
    $owner->name         = $request->name;
    $owner->display_name = $request->display_name; // optional
    $owner->description  = $request->description; // optional
    $owner->save();
    return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if( Role::findOrFail($id)->delete() ) {
        flash()->success('Role has been deleted');
    } else {
        flash()->success('Role not deleted');
    }

    return redirect()->back();
    }
}
