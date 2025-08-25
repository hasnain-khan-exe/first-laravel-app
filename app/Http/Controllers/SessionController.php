<?php

namespace App\Http\Controllers;

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
        $loginUser = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($loginUser)){
            throw ValidationException::withMessages([
                'password' => 'The provided credentials are incorrect. Try again!',
            ]);
        }
        // Auth::attempt($request->only('email', 'password'));
        
        request()->session()->regenerate();

        return redirect('/')->with('success', 'Login successful!');
    
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
