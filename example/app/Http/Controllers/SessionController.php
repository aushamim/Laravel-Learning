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
        // validate
        $attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // attempt to login
        $authenticated = Auth::attempt($attributes);
        if (! $authenticated) {
            throw ValidationException::withMessages([
                'email' => 'Credentials do not match',
                'password' => 'Credentials do not match',
            ]);
        }

        // regenetate session token (to protect from session hijaking)
        request()->session()->regenerate();

        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
