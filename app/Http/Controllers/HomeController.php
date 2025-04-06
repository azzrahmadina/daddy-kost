<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kamar;
use App\Models\Pengaduan;
use App\Models\Penghuni;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaksi = Transaksi::orderBy('created_at', 'desc')->limit(5)->get(); 
        $pengaduan = Pengaduan::where('status', 'incomplete')->get();
        $kamar = Kamar::all(); 
        $penghuni = Penghuni::all(); 
        return view('home', compact('transaksi', 'kamar', 'penghuni', 'pengaduan'));
    }
}
