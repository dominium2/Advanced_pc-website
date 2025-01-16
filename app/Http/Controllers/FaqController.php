<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FaqCategory;
use App\Models\FaqQuestion;

class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::with('questions')->get();
        return view('faq', compact('categories'));
    }

    public function adminIndex()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $categories = FaqCategory::all();
        return view('admin.faq-admin', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $request->validate(['name' => 'required|string|max:255']);
        FaqCategory::create($request->all());
        return redirect()->back()->with('success', 'Category added successfully.');
    }

    public function storeQuestion(Request $request)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $request->validate([
            'category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);
        FaqQuestion::create($request->all());
        return redirect()->back()->with('success', 'Question added successfully.');
    }

    public function updateCategory(Request $request, FaqCategory $category)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $request->validate(['name' => 'required|string|max:255']);
        $category->update($request->all());
        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function updateQuestion(Request $request, FaqQuestion $question)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $request->validate([
            'category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);
        $question->update($request->all());
        return redirect()->back()->with('success', 'Question updated successfully.');
    }

    public function destroyCategory(FaqCategory $category)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }

    public function destroyQuestion(FaqQuestion $question)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        $question->delete();
        return redirect()->back()->with('success', 'Question deleted successfully.');
    }
}
