<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create(Request $request)
    {
        return view('register');
    }

    public function store(Request $request)
    {
        return view('register');
    }
}
