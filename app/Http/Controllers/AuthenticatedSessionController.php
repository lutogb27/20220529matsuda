<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        return view('login');
    }

    public function create(Request $request)
    {
        return view('login');
    }

    public function destroy(Request $request)
    {
        return view('logout');
    }
}
