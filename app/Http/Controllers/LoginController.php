<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('book.index');
        }else{
            return redirect()->back();
        }
    }
    function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
