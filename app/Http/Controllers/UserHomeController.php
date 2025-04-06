<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kamar;
use App\Models\Penghuni;
use Auth;

class UserHomeController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;

        $transaksi = Transaksi::where('id_user', $user)->orderBy('created_at', 'desc')->get();

        $kamar = Kamar::all();
        $penghuni = Penghuni::all();

        return view('user.home', compact('transaksi', 'kamar', 'penghuni'));
    }
}
