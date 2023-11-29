<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class TimeController extends Controller
{
    public function timecontrollermethod(){
        $current_time = Carbon::now()->format('d/m/Y H:i:s');
        return view('page1',['current_time'=>$current_time]);
    }
    public function getRealTime() {
        $current_time = Carbon::now()->format('d/m/Y H:i:s');
        return response()->json($current_time);
    }
}
