<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    public function store(LoginRequest $request)
    {
        $email = $request->$email;
        $password = $request->$password;

        $hash_password = Hash::make($password);

        User::create([
            'email' => $email,
            'password' => $hash_password,
        ]);

        return redirect('/');
    }

    public function create(Request $request)
    {
        return view('login');
    }

    public function destroy(Request $request)
    {
        return redirect('login');
    }
}
