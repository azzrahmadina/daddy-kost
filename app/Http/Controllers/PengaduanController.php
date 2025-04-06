<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = Pengaduan::orderBy('created_at', 'desc')->get(); ;
        return view('admin.pengaduan.index', compact('pengaduan'));
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
            'keterangan' =>'required',
            'status' =>'required'
            
        ]);

        Pengaduan::create($request->all());
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dibuat');
    }


    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::find($id);
        return response()->json($pengaduan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengaduan $pengaduan)
    {
        $request->validate([
            'keterangan' =>'required',
            'status' =>'required',
            
        ]);

        $pengaduan->update($request->all());

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengaduan $pengaduan)
    {
        $pengaduan->delete();
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus');
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $pengaduan = Pengaduan::where('keterangan', 'LIKE', '%'. $request->search . '%')->get();
        } else {
            $pengaduan = Pengaduan::all();
        } 

        return view('admin.pengaduan.index', [ 'pengaduan' => $pengaduan]);
    }
}
