<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view("register");
    }

    public function store(Request $request)
    {
        $request->validate( [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ]);

        $user = User::create( [
            'name' => $request-> name,
            'email' => $request-> email,
            'password' => Hash::make( $request->input( 'password')),
        ]);

        Auth::login( $user);

        return redirect()->route('login.form')->with('success', 'Registration successful!');
    }
}


