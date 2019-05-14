<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Attandance;
use Carbon\Carbon;
use Auth;

class AttandanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clockIn()
    {
        //
        $current_date_time = Carbon::now()->toDateTimeString();
        $attandance = Attandance::where('user_id',Auth::user()->id)->where('date',Carbon::now()->toDateString())->first();
        if(empty($attandance->clock_in)){
            $att = Attandance::create([
            'user_id' => Auth::user()->id,
            'date' => Carbon::now(),
            'clock_in' => $current_date_time
        ]);
            $time = $att->clock_in;
            $timeout = $att->clock_out;
            $clockin = $att->id;
        }else{

        $time = $attandance->clock_in;
        $timeout = $attandance->clock_out;
        $clockin = $attandance->id;
        }
        return redirect('dashboard')->with(['clockin'=>$clockin,'time'=>$time,'timeout'=>$timeout]);
    }

    public function clockOut(Request $request)
    {
        //
        $current_date_time = Carbon::now()->toDateTimeString();
        $attandance = Attandance::where('user_id',Auth::user()->id)->where('date',Carbon::now()->toDateString())->first();
        if(empty($attandance->clock_out)){
            $att = Attandance::where('user_id',Auth::user()->id)->where('id',$request->clockinid)->update([
            'clock_out' => $current_date_time
        ]);
            $timeout = $current_date_time;
        }else{

        $timeout = $attandance->clock_out;
        }
        $clockin = $attandance->id;
        $time = $attandance->clock_in;
        return redirect('dashboard')->with(['clockin'=>$clockin,'time'=>$time,'timeout'=>$timeout]);
    }

    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
