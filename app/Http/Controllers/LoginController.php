<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function __invoke(Request $request)
    {
        //
    }*/

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        //Validacion de email y password
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //Si tiene exito el intento de login se regenera sesion y se redirige a profile
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('profile');
        }

        return back()->withErrors([
            'email' => 'Las credenciales son incorrectas',
        ])->onlyInput('email');
    }
}
