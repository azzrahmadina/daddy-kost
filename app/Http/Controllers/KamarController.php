<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Kategori;
use App\Models\Penghuni;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource., 
     */
    public function index()
    {
        $kamar = Kamar::all();
        $kategori = Kategori::all(); 
        $penghuni = Penghuni::all(); 
        return view('admin.kamar.index', compact('kamar', 'kategori', 'penghuni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'status' => 'required',
            'gambar' => 'image',
            'keterangan' => 'required',
            'id_kategori' => 'required',
            'id_penghuni' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/img/' , $gambar->hashName());

        Kamar::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'status' => $request->status,
            'gambar' => $gambar->hashName(),
            'keterangan' => $request->keterangan,
            'id_kategori' => $request->id_kategori,
            'id_penghuni' => $request->id_penghuni,
        ]);

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return response()->json($kamar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'status' => 'required',
            'gambar' => 'image',
            'keterangan' => 'required',
            'id_kategori' => 'required',
            'id_penghuni' => 'required',
        ]);

        
        $kamar = Kamar::findOrFail($id);

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/img/' , $gambar->hashName());

            $kamar->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'status' => $request->status,
                'gambar' => $gambar->hashName(),
                'keterangan' => $request->keterangan,
                'id_kategori' => $request->id_kategori,
                'id_penghuni' => $request->id_penghuni
            ]);
            
        } else {
            
            $kamar->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'status' => $request->status,
                'keterangan' => $request->keterangan,
                'id_kategori' => $request->id_kategori,
                'id_penghuni' => $request->id_penghuni
            ]);
        }

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dihapus');
    }

    public function search(Request $request)
    {
        $kategori = Kategori::all();
        $penghuni = Penghuni::all();

        if ($request->has('search')) {
            $kamar = Kamar::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $kamar = Kamar::all();
        }

        return view('admin.kamar.index', compact('kamar', 'kategori', 'penghuni'));
    }

    public function getHargaKamar($id)
    {
        $kamar = Kamar::findOrFail($id);
        if ($kamar) {
            return response()->json(['harga' => $kamar->harga]);
        }
        return response()->json(['error' => 'Kamar tidak ditemukan'], 404);
    }

}
