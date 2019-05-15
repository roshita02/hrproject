<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Profile;
use Entrust;
use App\Models\Designation;
use Mail;

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
        if(!Entrust::can('view_employees')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
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
        if(!Entrust::can('add_employees')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
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
        //dd($request->all());
    $owner = new User();
    $owner->name         = $request->name;
    $owner->email = $request->email; 
    $owner->password  = bcrypt($request->password); 
    $owner->save();
    $request->request->add(['user_id' => $owner->id]); //add request
    if($request->hasfile('image')){
        $file1 = $request->file('image');
                $destinationPath1 = public_path(). '/images/user/';
                $filename1 = $file1->getClientOriginalName();
                $file1->move($destinationPath1, str_replace(' ', '-', strtolower(  $filename1 ) ));
    //$request->request->add(['image' => $filename1]);
    }
    Profile::create([
            'employee_code' => $request->employee_code,
            'gender' => $request->gender,
            'marital_status' => $request->marital_status,
            'dob' => $request->marital_status,
            'date_of_joining' => $request->date_of_joining,
            'date_of_leaving' => $request->date_of_leaving,
            'date_of_retirement' => $request->date_of_retirement,
            'contact_no' => $request->contact_no,
            'image' => $filename1,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'googleplus_link' => $request->googleplus_link,
        ]);
    $email = $request->email;
    Mail::send('email_template.email', ['email' => $request->email, 'password' => $request->password,'name' => $request->name ], function ($m) use ($email) 
        {
            $m->from( 'neha.kd4866@gmail.com' , 'Login Detail Info');

            $m->to( $email )->subject('Login Detail Info');

        });
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
        if(!Entrust::can('edit_employees')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
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
    public function update(Request $request, $id)
    {
        //
        if($request->hasfile('image')){
                $file1 = $request->file('image');
                $destinationPath1 = public_path(). '/images/user/';
                $filename1 = $file1->getClientOriginalName();
                $file1->move($destinationPath1, str_replace(' ', '-', strtolower(  $filename1 ) ));
                //$request->request->add(['image' => str_replace(' ','-',$filename1)]);
        }else{
            $filename = Profile::findOrFail($id);
            $filename1 = $filename->image;
        }
         Profile::where('id',$id)->update([
            'employee_code' => $request->employee_code,
            'gender' => $request->gender,
            'marital_status' => $request->marital_status,
            'dob' => $request->marital_status,
            'date_of_joining' => $request->date_of_joining,
            'date_of_leaving' => $request->date_of_leaving,
            'date_of_retirement' => $request->date_of_retirement,
            'contact_no' => $request->contact_no,
            'image' => $filename1,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'googleplus_link' => $request->googleplus_link,
         ]);
         //$employee->save();

        return redirect('/employee')->withSuccess(trans('messages.employee').' '.trans('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $employee)
    {
        //
        if(!Entrust::can('delete_employees')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
        $userid = $employee->user_id;
        $employee->delete();
        $user = User::find($id);
        $email = $user->email;
        $user->delete();
        $body = 'Sorry, you have been removed from our company!';
          Mail::send('email_template.all', ['name' => $user->name, 'body' => $body ], function ($m) use ($email) 
        {
            $m->from( 'neha.kd4866@gmail.com' , 'Login Detail Info');

            $m->to( $email )->subject('Login Detail Info');

        });
         return redirect('employee')->withSuccess(trans('messages.designation').' '.trans('messages.deleted'));
    }
}
