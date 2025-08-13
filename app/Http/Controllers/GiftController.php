<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gift_file' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $imageData = base64_encode(file_get_contents($request->file('gift_file')->path()));

        Gift::create([
            'name' => $request->name,
            'image' => $imageData,
        ]);

        return back()->with('success', 'Bukti transfer berhasil diunggah!');
    }

    public function index()
    {
        $gifts = Gift::latest()->get();
        return view('gifts.index', compact('gifts'));
    }
}
