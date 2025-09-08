<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Password;



class AuthController extends Controller
{
    public function signIn()
    {
        return view("auth.sign-in");
    }

    public function signUp()
    {
        return view("auth.sign-up");
    }


    public function store(Request $request)
{
    $data = $request->validate([
        "name" => ['required', 'string', 'min:5', 'max:50'],
        "username" => ['required', 'string', 'min:6', 'max:10', 'unique:users,username'],
        "email" => ['required', 'string', 'email', 'unique:users,email'],
        "password" => [
            'required',
            Password::min(6)
                ->mixedCase() // capital & small letter
                ->numbers()   // at least one number
                ->symbols()   // at least one symbol
        ],
    ]);

    // user creation
    User::create($data);

    return redirect()->back()->with('success', 'User created successfully.');
}

}
