<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Kamar;
use App\Models\Penghuni;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all(); 
        $kamar = Kamar::where('status', 'kosong')->get(); 
        $penghuni = Penghuni::where('status', 'aktif')->get(); 
        return view('admin.transaksi.index', compact('transaksi', 'kamar', 'penghuni'));
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
            'id_penghuni' =>'required',
            'id_kamar' =>'required',
            'harga' => 'required',
            'durasi' =>'required',
            'tgl_masuk' =>'required',
            
        ]);

        $total_harga = $request->harga * $request->durasi;

        Transaksi::create([
            'id_penghuni' => $request->id_penghuni,
            'id_kamar' => $request->id_kamar,
            'harga' => $request->harga,
            'total_harga' => $total_harga,
            'durasi' => $request->durasi,
            'tgl_masuk' => $request->tgl_masuk,
        ]);

        $kamar = Kamar::findOrFail($request->id_kamar);
        $kamar->update(['status' => 'terisi']);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        if (!$transaksi) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        return response()->json($transaksi);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_penghuni' => 'required',
            'id_kamar' => 'required',
            'harga' => 'required|numeric',
            'durasi' => 'required|numeric',
            'tgl_masuk' =>'required',
        ]);

        $transaksi = Transaksi::find($id);
        if (!$transaksi) {
            return redirect()->back()->withErrors('Data not found');
        }

        $kamarLama = Kamar::findOrFail($transaksi->id_kamar);
        $kamarLama->update(['status' => 'kosong']);

        $transaksi->update([
            'id_penghuni' => $request->id_penghuni,
            'id_kamar' => $request->id_kamar,
            'harga' => $request->harga,
            'durasi' => $request->durasi,
            'tgl_masuk' => $request->tgl_masuk,
            'total_harga' => $request->harga * $request->durasi,
        ]);

        $kamarBaru = Kamar::findOrFail($request->id_kamar);
        $kamarBaru->update(['status' => 'terisi']);

        return redirect()->back()->with('success', 'Transaksi berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }

    public function search(Request $request)
    {
        $kamar = Kamar::all();
        $penghuni = Penghuni::all();

        $query = Transaksi::query();

        if ($request->has('search')) {
            $search = $request->search;

            $query->whereHas('kamar', function ($q) use ($search) {
                $q->where('nama', 'LIKE', '%' . $search . '%');
            })->orWhereHas('penghuni', function ($q) use ($search) {
                $q->where('nama', 'LIKE', '%' . $search . '%');
            });
        }

        $transaksi = $query->get();

        return view('admin.transaksi.index', compact('transaksi', 'kamar', 'penghuni'));
    }

}
