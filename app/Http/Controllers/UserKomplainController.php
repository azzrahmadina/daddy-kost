<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;

class UserKomplainController extends Controller
{
    public function index()
    {
        return view('user/komplain');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' =>'required',
            
        ]);

        Pengaduan::create($request->all());
        return redirect()->route('komplain.index')->with('success', 'Komplain berhasil dibuat');
    }
}
