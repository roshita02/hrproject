<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Designation;
use App\User;
use Entrust;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         if(!Entrust::can('view_designations')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
        $departments = Department::all()->pluck('name','id')->all();
        $designations = Designation::all();
        return view('backend.employee.designation.index',compact('departments','designations'))->withClass('designation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Designation $designation)
    {
        //
        $data = $request->all();


        $designation->fill($data)->save();

        if($request->has('is_default')){

            Designation::whereNotNull('id')->update(['is_default' => 0]);

            $designation->is_default = 1;

            $designation->save();

        }

        return redirect()->back()->withSuccess(trans('messages.designation').' '.trans('messages.added'));  

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
    public function edit(Designation $designation)
    {
        //
         if(!Entrust::can('edit_designations')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
        $departments = \App\Department::all()->pluck('name','id')->all();
        return view('backend.employee.designation.edit',compact('designation','departments'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designation $designation)
    {
        //
         $data = $request->all();
         $designation->fill($data)->save();

        if($request->has('is_default')){

            \App\Designation::whereNotNull('id')->update(['is_default' => 0]);

            $designation->is_default = 1;

            $designation->save();

        }
        return redirect('/designation')->withSuccess(trans('messages.designation').' '.trans('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designation $designation)
    {
        //
        $user_check = User::where('designation_id',$designation->id)->first();
         if(!Entrust::can('delete_designations')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
        $designation->delete();
         return redirect('designation')->withSuccess(trans('messages.designation').' '.trans('messages.deleted'));
    }
}
