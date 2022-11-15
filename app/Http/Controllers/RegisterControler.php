<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
class RegisterControler extends Controller
{
    public function register()
    {
        return view('layouts.register');
    }
    public function registerUser(RegisterRequest $request)
    {
        
    }
}