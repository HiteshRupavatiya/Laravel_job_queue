<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name|min:5|alpha',
            'email' => 'required|unique:users,email|email|max:40',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        dispatch(new SendWelcomeEmail($user));

        return redirect()->back()->with('success', 'User Register Successully Please Check Your Email');
    }
}
