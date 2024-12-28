<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // checking user and password for login process
        $isLoggedIn = Auth::attempt([
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);
        if (!$isLoggedIn) {
            return back()->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ]);
        }

        // redirect to home page
        return redirect()->route('home');
    }
}
