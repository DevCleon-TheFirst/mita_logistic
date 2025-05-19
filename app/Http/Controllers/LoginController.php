<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view("login");
    }
    public function login(Request $request){
        $request->validate(rules:[
            'email' => 'required|email',
            'password' => 'required',
        ]);

    if (Auth::attempt($request->only('email', 'password'))){
        return redirect()->intended('/home')->with('success','Login successful');
    }
    return back()->withErrors([
        'email'=> 'Invalid credentials',
    ])->withInput();

    }

    public function make(){
        return view('/');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}
