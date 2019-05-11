<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Profile;
use Entrust;
use App\Models\Designation;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Profile::get(); 
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.new',compact(''));
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
        //
        $this->validate($request, [
        'name' => 'required|min:2',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'date_of_joining' => 'required',
        'contact_no' => 'required'
    ]);
    //dd($request->all());
    $owner = new User();
    $owner->name         = $request->name;
    $owner->email = $request->email; 
    $owner->password  = bcrypt($request->password); 
    $owner->save();

    $request->request->add(['user_id' => $owner->id]); //add request

    Profile::create($request->except('name', 'email','password'));

    return redirect()->route('employee.index');
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
        $employee = Profile::findOrFail($id);
        return view('employee.edit',compact('employee'))->withClass('emploee-edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $employee)
    {
        //
        $data = $request->except('photo');
         $employee->fill($data)->save();
         $employee->save();

        return redirect('/employee')->withSuccess(trans('messages.employee').' '.trans('messages.updated'));
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
    }
}
