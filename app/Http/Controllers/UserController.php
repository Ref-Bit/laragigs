<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('pages.users.register');
    }
    public function login()
    {
        return view('pages.users.login');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8|max:16'
        ]);


        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in!');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:16'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect("/")->with('message', 'You have logged in successfully');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with('message', 'You have been logged out');
    }
}
