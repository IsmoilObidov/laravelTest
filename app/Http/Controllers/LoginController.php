<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check())
        {
            return redirect()->intended(route('user.private'));
        }

        $formFields = $request->only(['email','password']);
        
        if(Auth::attempt($formFields))
        {
            return redirect()->intended(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors
        ([
            'email' => 'failed to login'
        ]);
    }

    public function logout()
    {
        if (Auth::check())
        {
            return redirect('/');
        }
    }
}
