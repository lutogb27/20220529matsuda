<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $today = Carbon::today();

        $attendances = Attendance::where('date',$today)->paginate(5);
        Paginator::useBootstrap();

        return view('index', ['attendances' => $attendances]);
    }
}
