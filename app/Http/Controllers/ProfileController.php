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
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->profile_image = 'images/'.$imageName;
        }

        $user->update($request->only('firstname', 'lastname', 'phone', 'email', 'delivery_address', 'billing_address'));

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
