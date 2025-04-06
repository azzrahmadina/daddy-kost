<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Auth;

class UserMenuController extends Controller
{
    public function index() {
        $menu = Menu::all();
        return view('user/daftar', compact('menu'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' =>'required',
        ]);

        Pesanan::create([
            'keterangan' => $request->keterangan,
        ]);

        Notification::create([
            'user_id' => auth()->id(),
            'title' => 'Pesanan Berhasil',
            'message' => 'Pesanan makanan atas nama ' . auth()->user()->name . ' berhasil dilakukan.',
            'type' => 'success',
        ]);


        return redirect()->route('daftar.index')->with('success', 'Pesanan berhasil dibuat');
    }
}
