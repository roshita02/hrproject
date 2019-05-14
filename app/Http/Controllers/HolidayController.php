<?php

namespace App\Http\Controllers;
use App\Holiday;
use Validator;
use Input;
use Redirect;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $holidays = Holiday::get();
        return view('backend.holiday.index',compact('holidays'))->withClass('holiday');
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
    public function store(Request $request, Holiday $holiday)
    {
        $this->validate($request, [
        'date' => 'date|required|',
    ]);
        $data = $request->all();
        $holiday->fill($data)->save();
        return redirect()->back()->withSuccess(trans('messages.holiday').' '.trans('messages.added'));
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
    public function edit(Holiday $holiday)
    {
        return view('backend.holiday.edit',compact('holiday'))->withClass('edit-holiday');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holiday $holiday)
    {
        $this->validate($request, [
        'date' => 'date|required|',
        ]);
        $data = $request->all();
        $holiday->fill($data)->save();
        return redirect('admin/holiday')->withSuccess(trans('messages.holiday').' '.trans('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holiday $holiday)
    {
        $holiday->delete();
        return redirect('admin/holiday')->withSuccess(trans('messages.holiday').' '.trans('messages.deleted'));
    }
}
