<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penghuni = Penghuni::all();
        return view('admin.penghuni.index', compact('penghuni'));
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
            'nama' =>'required',
            'email' =>'required',
            'gender' =>'required',
            'no_hp' =>'required',
            'status' =>'required',
            
        ]);

        Penghuni::create($request->all());
        return redirect()->route('penghuni.index')->with('success', 'Penghuni berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penghuni $penghuni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penghuni = Penghuni::find($id);
        return response()->json($penghuni);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penghuni $penghuni)
    {
        $request->validate([
            'nama' =>'required',
            'email' =>'required',
            'gender' =>'required',
            'no_hp' =>'required',
            'status' =>'required',
            
        ]);

        $penghuni->update($request->all());

        return redirect()->route('penghuni.index')->with('success', 'Penghuni berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penghuni $penghuni)
    {
        $penghuni->delete();
        return redirect()->route('penghuni.index')->with('success', 'Penghuni berhasil dihapus');
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $penghuni = Penghuni::where('nama', 'LIKE', '%'. $request->search . '%')->get();
        } else {
            $penghuni = Penghuni::all();
        } 

        return view('admin.penghuni.index', [ 'penghuni' => $penghuni]);
    }
}
