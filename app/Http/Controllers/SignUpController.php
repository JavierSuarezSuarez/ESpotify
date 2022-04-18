<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{

    //Sign ups a new user and redirects him to his profile
    public function register(Request $request) {

        //Validates the user data introduced
        $input = $request->validate([
            'nombre' => 'required|min:3|max:20',
            'apellidos' => 'required|min:3|max:20',
            'email' => 'email',
            'password' => 'min:1|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:1',
        ]);

        $inputValidated = $request -> all();

        // Hash the password
        $inputValidated ['password'] = bcrypt($inputValidated['password']);

        // Checks that the user created does not exists
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // If the user created exists an error is printed
        if (Auth::attempt($credentials)) {
            return back()->withErrors([
                'message' => 'User already exists',
            ]);
        }

        // Create and log in the user
        $user= User::create($inputValidated);

        Auth::login($user);

        // Redirect to profile with the new users data
        return redirect()
            ->to('/profile');
    }
}
