<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login()
    {
        return view('layouts.login');
    }
    public function loginUser(LoginRequest $request)
    {

          $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
 return redirect()->back()->with('message', 'Oppes! You have entered invalid credentials');
       
    }
}