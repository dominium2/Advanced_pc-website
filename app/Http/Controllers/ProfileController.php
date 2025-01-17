<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

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
            $imageData = file_get_contents($image->getRealPath());

            if ($user->image) {
                $user->image->update(['image_data' => $imageData]);
            } else {
                Image::create([
                    'user_id' => $user->id,
                    'image_data' => $imageData,
                ]);
            }
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
