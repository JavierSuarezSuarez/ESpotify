<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{

    //Sign ups a new user and redirects him to his profile
    public function register(Request $request) {

        // Retrieve all request data.
        $inputValidated = $request -> all();
        // Hash the password
        $inputValidated ['password'] = bcrypt($inputValidated['password']);

        // Create and log in the user
        $user= User::create($inputValidated);
        Auth::login($user);

        // Redirect to profile with the new users data
        return redirect()
            ->to('/profile');
    }
}
