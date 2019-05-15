<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Entrust;
use App\Models\LeaveType;
use App\Models\Leave;
use Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $leavetypes = LeaveType::pluck('name','id');
        $leaves = Leave::get();
        return view('leave.index',compact('leaves','leavetypes'));
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
    public function store(Request $request, Leave $leave)
    {
        //
        $this->validate($request,[
            'leave_type_id' => 'required',
            'status' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            //'approved_date' => 'required',
        ]);
        $request->request->add(['user_id'=>Auth::user()->id]);
        $leave->fill($request->all());
        $leave->save();
        return redirect()->route('leave.index')->withSuccess(trans('messages.leave').' '.trans('messages.created'));
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
        $leave = Leave::findOrFail($id);
        $leavetypes = LeaveType::pluck('name','id');
        return view('leave.edit',compact('leave','leavetypes'));
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
            'leave_type_id' => 'required',
            'status' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            //'approved_date' => 'required',
        ]);

        Leave::where('id',$id)->where('user_id',Auth::user()->id)->update([
            'leave_type_id' => $request->leave_type_id,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'description' => $request->description,
            'status' => $request->status,
            'remarks' => $request->remarks,
            'approved_date' => $request->approved_date,
            'admin_remarks' => $request->admin_remarks
        ]);

        return rediect()->route('leave.index')->withSuccess(trans('messages.leave').' '.trans('messages.edit'));
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
        $leave = Leave::findOrFail($id);
        if($leave){
            $leave->delete();
        }
        return rediect()->route('leave.index')->withSuccess(trans('messages.leave').' '.trans('messages.delete'));
    }
}
