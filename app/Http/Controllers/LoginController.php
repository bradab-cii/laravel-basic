<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('guest.login');
    }

    public function store(Request $request): RedirectResponse
    {
        // validate for checking email and password
        $validated = $request->validate([
            'email' => ['required', 'email'], // email = example@gmail.com, test@example.com
            'password' => ['required', 'min:8', 'string'],
        ]);

        // storing email and password to database
        // calling model user and store it to database
        // $email = $request->email;
        // $password = $request->password;
        // $email = $validated['email'];
        // $password = $validated['password'];
        // dd($email, $password);

        // redirect to home page
        return redirect()->route('home');
    }
}
