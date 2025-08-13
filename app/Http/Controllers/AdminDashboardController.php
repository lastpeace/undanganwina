<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use App\Models\Gift;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $guests = Guest::latest()->paginate(10);
        $gifts = Gift::latest()->paginate(10);

        return view('dashboard', compact('guests', 'gifts'));
    }

    public function storeGuest(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:guests',
            'status' => 'required|in:Hadir,Tidak Hadir,Belum Konfirmasi',
            'comment' => 'nullable|string|max:500'
        ]);

        Guest::create([
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status ?? null,
            'comment' => $request->comment ?? null
        ]);

        return back()->with('success', 'Tamu baru berhasil ditambahkan!');
    }
}
