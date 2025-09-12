<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.sign-in');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            "email" => ['required', 'email', 'exists:users,email'],
            "password" => ['required', 'string', 'min:6', 'max:15']
        ]);

        $allowedRoles = [
            UserRole::Admin,
            UserRole::Collector,
        ];

        if (Auth::attempt(array_merge($request->only("email", "password"), ["role" => $allowedRoles]))) return redirect()->intended(route('dashboard'));

        return back()->withErrors([
            "login" => 'Invalid Credentials!'
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
