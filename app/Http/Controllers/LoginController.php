<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //Logins the user redirecting him to his profile
    public function authenticate(Request $request)
    {
        //Email and password validation
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        //If login attempt is successful, session regenerates and user is redirected to profile
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('profile');
        }
        //If login attempt is NOT successful, keeps the user in the form showing an error message
        return back()->withErrors([
            'message' => 'Wrong credentials',
        ]);
    }

    //Logouts the user and redirects him to login
    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/login');
    }
}
