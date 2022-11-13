<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function loginuser(Request $login)
    {
        $login->validate([

            'email' => 'required',
            'password' => 'required'
        ]);

        $login->session()->put('email',$login['email']);
        return redirect('dashboard')->with('status','successfully login..');
    }

    function logout(){
        if (session()->has('email')) {
            session()->pull('email');
            return redirect('login');
        }
    }
}
