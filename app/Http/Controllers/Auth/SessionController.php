<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //% validate
        $attributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        //% attempt to login the user
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email'=> 'Sorry, those credentials do not match.',
            ]);
        }

        //% regenerate the session token
        request()->session()->regenerate();

        //% redirect
        return redirect()->route('home');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
