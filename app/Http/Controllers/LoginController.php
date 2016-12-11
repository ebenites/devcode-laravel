<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\LoginRequest;

use Auth;

class LoginController extends Controller
{
    
    public function login()
    {
        return view('login');
    }
    
    public function postlogin(LoginRequest $request)
    {
        if( Auth::attempt( [ 'email' => $request['email'], 'password' => $request['password'] ] ) )
        {
            return "SUCCESS";
        }
        else
        {
            return "AHORITA NO JOVEN";
        }
    }
    
    public function logout()
    {
        Auth::logout();
        
        return redirect('login');
    }
    
}
