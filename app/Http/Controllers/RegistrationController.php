<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        //Validate
        $this->validate(request(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // Create user
        $user = User::create(
            [
                'name'     => $request['name'],
                'email'    => $request['email'],
                'password' => bcrypt($request['password']),
            ]
        );

        // Login
        auth()->login($user);

        // redirect
        return redirect()->home();
    }
}
