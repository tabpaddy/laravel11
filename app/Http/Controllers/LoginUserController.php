<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8, string',
        ]);

        // Attempt to log the user in
        if(Auth::guard('web') -> attempt(['email' => $request->email, 'password' => $request->password])){
            // if successful then redirect to thier intended loaction
            return redirect()->intended(route('posts.index'));
        }else{
            // if unsuccessful, then redirct back to the login with the form data
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records',
            ]);
        }
    }

    public function logout(Request $request)
    {
        //login out
        Auth::guard('web')->logout();

        $request->session()->invalidate();//destroy session
        $request->session()->regenerateToken();//regenerate token
        return to_route('posts.index');
    }
}
