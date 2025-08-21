<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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

        Auth::attempt($loginUser);
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
