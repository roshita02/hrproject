<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveType;
use Entrust;

class LeaveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $leave_types = LeaveType::get();
        return view('leave_type.index',compact('leave_types'));
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
    public function store(Request $request, LeaveType $leavetype)
    {
        //
        $this->validate($request,[
            'name' => 'required'
        ]);

        $leavetype = new LeaveType();
        $leavetype->name = $request->name;
        $leavetype->save();
        return redirect()->route('leavetype.index')->withSuccess(trans('messages.leave_type').' '.trans('messages.updated'));
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
        $leave_type = LeaveType::findOrFail($id);
        return view('leave_type.edit',compact('leave_type'));
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
        $this->validate($request,[
            'name' => 'required'
        ]);

       $leavetype = LeaveType::findOrFail($id);
        // Update leave type
        $leavetype->fill($request->all());

        $leavetype->save();
        return redirect()->route('leavetype.index')->withSuccess(trans('messages.leave_type').' '.trans('messages.updated'));
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
        $leavetype = LeaveType::findOrFail($id);
        $leavetype->delete();
        return redirect()->route('leavetype.index')->withSuccess(trans('messages.leave_type').' '.trans('messages.deleted'));
    }
}
