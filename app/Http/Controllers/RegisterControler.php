<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterControler extends Controller
{
    public function register()
    {
        return view('layouts.register');
    }
}