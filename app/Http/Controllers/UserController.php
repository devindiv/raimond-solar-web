<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register form

    public function create(Request $request) {
        return view('users.register');
    }

    //Store User

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        //Hash Password

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        //Login

        auth()->login($user);

        return redirect('/');
    }

    //Logout

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    //Show Login Form

    public function login() {
        return view('users.login');
    }

    //Authentication

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}
