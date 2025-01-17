<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Contact;
use App\Models\News;
use App\Models\NewsImage;

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

    public function createUser(Request $request)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'is_admin' => 'required|boolean',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin,
        ]);

        return redirect()->back()->with('success', 'User created successfully.');
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
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
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

    public function viewMessages()
    {
        $messages = Contact::all();
        return view('admin.mails', compact('messages'));
    }

    public function deleteMessage($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages')->with('success', 'Message deleted successfully!');
    }

    public function createNews()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        return view('admin.news-admin');
    }

    public function storeNews(Request $request)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published_at' => 'required|date',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->published_at = $request->published_at;
        $news->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageData = file_get_contents($image->getRealPath());

            NewsImage::create([
                'news_id' => $news->id,
                'image_data' => $imageData,
            ]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'News post created successfully.');
    }
}
