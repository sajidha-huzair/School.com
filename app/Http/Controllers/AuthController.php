<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        //dd(Hash::make(123456));
        if(!empty(Auth::check()))
        {
            if(Auth::user()->usertype == 'admin')
            {
                return redirect('admin/dashboard');
            }
            elseif(Auth::user()->usertype == 'teacher')
            {
                return redirect('teacher/dashboard');
            }   
            elseif(Auth::user()->usertype == 'student')
            {
                return redirect('student/dashboard');
            }
        }
        return view('auth.login');
    }
    public function AuthLogin(Request $request)
    {
        $remember= !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember))
        {
            if(Auth::user()->usertype == 'admin')
            {
                return redirect('admin/dashboard');
            }
            elseif(Auth::user()->usertype == 'teacher')
            {
                return redirect('teacher/dashboard');
            }   
            elseif(Auth::user()->usertype == 'student')
            {
                return redirect('student/dashboard');
            }
        }
        else{
            return redirect()->back()->with('error','Invalid Email or Password');
        }
    }


    public function forgotpassword()
    {
        return view('auth.forgotpassword');
    }

    public function postforgotpassword(Request $request)
{
    // Validate the email input
    $request->validate([
        'email' => 'required|email',
    ]);

    // Find the user by email
    $user = User::where('email', $request->email)->first();

    if ($user) {
        // Generate and save a random remember token
        $user->remember_token = Str::random(60);
        $user->save();

        // Try sending the reset email
        try {
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', 'Email sent successfully. Check your mail to reset the password.');
        } catch (\Exception $e) {
            // Log the mail error and return a failure message
            \Log::error('Failed to send password reset email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }
    } else {
        return redirect()->back()->with('error', 'Email not found.');
    }
}


    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
