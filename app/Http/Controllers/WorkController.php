<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(Request $request)
    {
        return view('stamping');
    }

    public function start(Request $request)
    {
        return view('stamping');
    }

    public function end(Request $request)
    {
        return view('stamping');
    }
}
