<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pc;
use App\Models\PcImage;

class PcController extends Controller
{
    public function index()
    {
        $pcs = Pc::with('images')->get();
        return view('homepage', compact('pcs'));
    }

    public function create()
    {
        return view('admin.inventory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
            'components' => 'required|string', // Validate components as string
        ]);

        $pc = Pc::create([
            'name' => $request->name,
            'price' => $request->price,
            'components' => $request->components, // Store components as text
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pc_images', 'public');

            PcImage::create([
                'pc_id' => $pc->id,
                'image_path' => $imagePath,
            ]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'PC created successfully.');
    }
}
