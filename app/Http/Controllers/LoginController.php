<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

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
        return redirect()->intended('/')->with('success','Login successful');
    }
    return back()->withErrors([
        'email'=> 'Invalid credentials',
    ])->withInput();

    }

    public function make(){
        return view('/');
    }
}
