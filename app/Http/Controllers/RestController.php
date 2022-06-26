<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;
use App\Timestamp;

class RestController extends Controller
{
    public function start(Request $request)
    {
        return view('stamping');
    }

    public function end(Request $request)
    {

        return view('stamping');
    }
}
