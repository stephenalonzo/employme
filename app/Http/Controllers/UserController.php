<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    // Show register form
    public function create()
    {

        return view('user.register');

    }

    // Store register data
    public function register(Request $request)
    {

        // dd($request);

        $userInput = $request->validate([
            'name'      => 'required|min:3',
            'email'     => ['required', 'email'],
            'password'  => 'required|confirmed|min:9',
            'purpose'   => 'required'
        ]);

        $userInput['password'] = bcrypt($userInput['password']);

        $user = User::create($userInput);

        // Automatically login user after register
        auth()->login($user);

        return redirect('/')->with('message', 'User created and has successfully logged in!');

    }

    // Show login form
    public function login()
    {

        return view('user.login');

    }

    // Get login data
    public function authenticate(Request $request)
    {

        $userInput = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => 'required'
        ]);

        if (auth()->attempt($userInput))
        {

            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');

        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');

    }

    // Log user out
    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }


}
