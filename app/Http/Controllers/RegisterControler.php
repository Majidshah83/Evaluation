<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\UserVerify;
class RegisterControler extends Controller
{
    public function register()
    {
        return view('layouts.register');
    }
    public function registerUser(RegisterRequest $request)
    {

        $user= new User();
        $user->name=$request->name;
         $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        $token = Str::random(64);
         UserVerify::create([
              'user_id' => $user->id,
              'token' => $token
            ]);
        Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Email Verification Mail');
          });
 return redirect()->back()->with('message', 'Token has Send to Your Email Successfully');
    }


    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;

            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

      return redirect()->route('login')->with('message', $message);
    }


    }