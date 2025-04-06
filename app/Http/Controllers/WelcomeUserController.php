<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kamar;
use App\Models\Penghuni;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Auth;

class WelcomeUserController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all(); 
        $kamar = Kamar::where('status', 'kosong')->get(); 
        $penghuni = Penghuni::all(); 
        return view('welcomeUser', compact('transaksi', 'kamar', 'penghuni'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kamar' =>'required',
            'harga' => 'required',
            'durasi' =>'required',
            'tgl_masuk' =>'required',
            'nama' =>'required',
            'email' =>'required',
            'no_hp' =>'required',
            'gender' =>'required',
            
        ]);

        $penghuni = Penghuni::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'gender' => $request->gender,
        ]);

        $total_harga = $request->harga * $request->durasi;

        Transaksi::create([
            'id_penghuni' => $penghuni->id,
            'id_kamar' => $request->id_kamar,
            'harga' => $request->harga,
            'total_harga' => $total_harga,
            'durasi' => $request->durasi,
            'tgl_masuk' => $request->tgl_masuk,
            'id_user' => auth()->id(),
        ]);

        $kamar = Kamar::findOrFail($request->id_kamar);
        $kamar->update([
            'status' => 'terisi',
            'id_penghuni' => $penghuni->id, 
        ]);

        Notification::create([
            'user_id' => auth()->id(),
            'title' => 'Transaksi Berhasil',
            'message' => 'Sewa kamar atas nama ' . $penghuni->nama . ' berhasil dilakukan.',
            'type' => 'success',
        ]);

        return redirect()->route('welcomeUser')->with('success', 'Transaksi berhasil dibuat');
    }
}
