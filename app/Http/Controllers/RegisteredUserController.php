<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create(Request $request)
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $hash_password = Hash::make($password);

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $hash_password,
        ]);

        return redirect('/login');
    }
}
