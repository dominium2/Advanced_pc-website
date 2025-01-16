<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        return view('admin.dashboard');
    }

    public function manageUsers()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function updateUser(Request $request, User $user)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        Log::info('AdminController: Updating user.', $request->all());
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'is_admin' => 'required|boolean',
        ]);

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'is_admin' => $request->is_admin,
        ]);

        return redirect()->back()->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        Log::info('AdminController: Deleting user.');
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
