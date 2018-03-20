<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    public function index()
    {
        return view('sessions.index');
    }

    public function store()
    {
        $this->validate(request(), ['email' => 'required|email', 'password' => 'required']);

        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials!',
            ]);
        }
        session()->flash('message', 'Welcome back');
        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
