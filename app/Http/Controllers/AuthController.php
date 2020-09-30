<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view ('auth.login');
    }

    public function postlogin(Request $request)
    {
        $data = ['name' => $request->name, 'password' => md5($request->pass)];
        if(\App\User::where($data)->first()){
            return view ('admin');
        }else{
            return view ('auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();
 
    }
    
}
