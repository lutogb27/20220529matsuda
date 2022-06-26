<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Time;
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
        $oldstart = Time::where('user_id',$user->id)->latest()->first();

        $oldDay = '';

        if($oldstart) {
            $oldTimePunchIn = new Carbon($oldstart->punchIn);
            $oldDay = $oldTimePunchIn->startOfDay();
        }
        $today = Carbon::today();

        if(($oldDay == $today) && (empty($oldstart->punchOut))) {
            return redirect()->back()->with('message','出勤打刻済みです');
        }

        $month = $request->month;
        $day = $request->day;
        $year = $request->year;

        $time = Time::create([
            'user_id' => $user_id,
            'month' => $month,
            'day' => $day,
            'year' => $year,
        ]);

        return redirect('/');
    }

    public function end(Request $request)
    {
        $user = Auth::user();
        $end = Time::where('user_id',$user->id)->latest()->first();

        $now = new Carbon();
        $punchIn = new Carbon($end->punchIn);
        $breakIn = new Carbon($end->breakIn);
        $breakOut = new Carbon($end->breakOut);

        $stayTime = $punchIn->diffInMinutes($now);
        $breakTime = $breakIn-> diffInMinutes($breakOut);
        $workingMinute = $stayTime - $breakTime;

        $workingHour = ceil($workingMinute / 15) * 0.25;

        if($end) {
            if(empty($end->punchOut)) {
                if($end->breakIn && !$end->breakOut) {
                    return redirect()->back()->with('message','休憩終了が打刻されていません');
                }else {
                    $end->update([
                        'punchOut' => Carbon::now(),
                        'workTime' => $workingHour
                    ]);
                    return redirect()->back()->with('message','お疲れ様でした'); 
                }
            } else {
                $today = new Carbon();
                $day = $today->day;
                $oldPunchOut = new Carbon();
                $oldPunchOutDay = $oldPunchOut->day;
                if ($day == $oldPunchOutDay) {
                    return redirect()->back()->with('message','退勤済みです');
                } else {
                    return redirect()->back()->with('message','出勤打刻をしてください');
                }
            }
        } else {
            return redirect()->back()->with('message','出勤打刻がされていません');
        } 
    }
}
