<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

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

    public function store(RegistrationForm $registrationForm)
    {
        $registrationForm->persist();
        session()->flash('message', 'Congratulations! Sign-up successful!');
        return redirect()->home();
    }
}
