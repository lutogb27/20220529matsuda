<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function index(Request $request)
    {
        return view('stamping');
    }

    public function start(Request $request)
    {
        $user = Auth::user();
        $attendance = Attendance::where('user_id',$user->id)->latest()->first();

        $oldDay = '';

        if($attendance) {
            $oldDate = new Carbon($attendance->date);
            $oldDay = $oldDate->startOfDay();
        }
        $today = Carbon::today();

        if($oldDay == $today) {
            return redirect()->back()->with('message','出勤打刻済みです');
        }

        Attendance::create([
            'user_id' => $user->id,
            'date' => $today,
            'start_time' => Carbon::now()
        ]);

        return redirect('/');
    }

    public function end(Request $request)
    {
        $user = Auth::user();
        $attendance = Attendance::where('user_id',$user->id)->latest()->first();

        $oldDay = '';

        if($attendance) {
            $oldDate = new Carbon($attendance->date);
            $oldDay = $oldDate->startOfDay();
        } else {
            return redirect()->back()->with('message','出勤未打刻です');
        }
        $today = Carbon::today();

        if($oldDay == $today && !empty($attendance->end_time)) {
            return redirect()->back()->with('message','退勤打刻済みです');
        }

        $attendance->update([
            'end_time' => Carbon::now()
        ]);

        return redirect('/');
    }
}
