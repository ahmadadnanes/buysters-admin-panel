<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        if(!auth()->attempt($request->only('email','password'))){
            redirect()->back();
        }
        session()->regenerate();

        redirect()->route('home');
    }
}
