<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RestController extends Controller
{
    public function start(Request $request)
    {
        $user = Auth::user();
        $today = Carbon::today();
        $attendance = Attendance::where('user_id', $user->id)->where('date', $today)->first();
        if(!$attendance){
            return redirect('/');
        }
        if($attendance->end_time){
            return redirect('/');
        }
        $rest = Rest::where('attendance_id', $attendance->id)->latest()->first();

        if($rest && !$rest->end_time){
            return redirect('/');
        }

        Rest::create([
            'attendance_id' => $attendance->id,
            'start_time' => Carbon::now()
        ]);

        return redirect('/');
    }

    public function end(Request $request)
    {
        $user = Auth::user();
        $today = Carbon::today();
        $attendance = Attendance::where('user_id', $user->id)->where('date', $today)->first();
        if(!$attendance){
            return redirect('/');
        }
        if($attendance->end_time){
            return redirect('/');
        }
        $rest = Rest::where('attendance_id', $attendance->id)->latest()->first();
        if(!$rest){
            return redirect('/');
        }
        if($rest->end_time){
            return redirect('/');
        }

        $rest->update([
            'end_time' => Carbon::now()
        ]);

        return redirect('/');
    }
}
