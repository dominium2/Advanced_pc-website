<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Pc;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::with('image')->get();
        $pcs = Pc::all();
        return view('homepage', compact('news', 'pcs'));
    }
}
