<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Entrust;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Entrust::can('view_departments')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
        $departments = Department::get();
        return view('backend.employee.department.index',compact('departments'))->withClass('department');
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
    public function store(Request $request, Department $department)
    {
        //
        $data = $request->all();
        $department->fill($data)->save();
        return redirect()->back()->withSuccess(trans('messages.department').' '.trans('messages.added'));
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
    public function edit(Department $department)
    {
        //
         if(!Entrust::can('edit_departments')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
        return view('department.edit',compact('department'))->withClass('edit-department');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
        $data = $request->all();
        $department->fill($data)->save();
        return redirect('department')->withSuccess(trans('messages.department').' '.trans('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
         if(!Entrust::can('delete_departments')){
            return redirect('dashboard')->withErrors(trans('messages.permission_denied'));
        }
        $department->delete();
         return redirect('department')->withSuccess(trans('messages.department').' '.trans('messages.deleted'));
    }
}
