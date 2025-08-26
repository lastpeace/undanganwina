<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index($code)
    {
        $guest = Guest::where('code', $code)->firstOrFail();
        $guestsWithComments = Guest::whereNotNull('comment')->get();
        return view('invitation', [
            'guest' => $guest,
            'guestsWithComments' => $guestsWithComments
        ]);
    }


    public function submitComment(Request $request)
    {
        $request->validate([
            'code' => 'required|exists:guests,code',
            'status' => 'required',
            'jumlah_tamu' => 'required',
            'comment' => 'nullable|string'
        ]);

        $guest = Guest::where('code', $request->code)->first();
        $guest->update([
            'status' => $request->status,
            'jumlah_tamu' => $request->jumlah_tamu,
            'comment' => $request->comment
        ]);

        return redirect()->route('invitation.index', ['code' => $request->code])
            ->with('success', 'Terima kasih atas konfirmasinya!');
    }

    public function showInvitation($code)
    {
        $guest = Guest::where('code', $code)->firstOrFail();

        $guestsWithComments = Guest::whereNotNull('comment')
            ->where('comment', '!=', '')
            ->latest()
            ->paginate(5);

        return view('invitation.show', compact('guest', 'guestsWithComments'));
    }


}
