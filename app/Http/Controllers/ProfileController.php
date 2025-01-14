<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'delivery_address' => 'nullable|string|max:255',
            'billing_address' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $user->update($request->only('firstname', 'lastname', 'phone', 'email', 'delivery_address', 'billing_address'));

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
