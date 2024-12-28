<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('users.profile', [
            'user' => $user
        ]);
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        // style 1
        // $user = Auth::user();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->save();

        // style 2
        // auth()->user()->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ]);

        // style 3
        $request->user()->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        // flash message
        // session()->flash('success', 'Profile updated successfully');
        // Display a success toast with no title
        flash()->success('Profile updated successfully.');

        return redirect()->route('user.profile');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        // flash message
        // session()->flash('success', 'Password updated successfully');
        // Display a success toast with no title
        flash()->success('Password updated successfully.');

        return redirect()->route('user.profile');
    }

    public function destroy(Request $request)
    {
        // delete user
        $request->user()->delete();
        // logout
        Auth::logout();
        return redirect()->route('home');
    }
}
