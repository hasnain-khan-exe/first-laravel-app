<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password as RulesPassword;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {

        // validation

        $userData= request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', RulesPassword::default()]  // working same as below 2 lines
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'password' => ['required', 'confirmed', RulesPassword::min(8)->mixedCase()->numbers()->symbols()],
        ]);

        // create the user

        $user= User::create($userData);

        // login

        Auth::login($user);

        //redirect to home page
        return redirect('/')->with('success', 'Registration successful!');
    }
}
