<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attandance;
use Auth; 
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $attandance = Attandance::where('user_id',Auth::user()->id)->where('date',Carbon::now()->toDateString())->first();
        if(!empty($attandance)){
        $time = $attandance->clock_in;
        $timeout = $attandance->clock_out;
        $clockin = $attandance->id;
    }else{
        $time = $timeout = $clockin = '';
    }
                       
        return view('backend.dashboard.index',compact('time','timeout','clockin') );
        
    }

}
   