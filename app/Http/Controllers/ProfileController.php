<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'billing_info' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
        ]);

        $user = auth()->user();
        $user->update($request->only('name', 'address', 'billing_info', 'payment_method'));

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
