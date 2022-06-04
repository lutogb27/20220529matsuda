<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;

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
