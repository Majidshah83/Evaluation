<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
        return redirect()->route('login')->with('message', 'Oppes! You have entered invalid credentials');


    }
    public function dashboard()
    {
         if(Auth::check()){
            return view('layouts.dashboard');
        }
 return redirect()->route('login')->with('message', 'Opps! You do not have access');

    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
