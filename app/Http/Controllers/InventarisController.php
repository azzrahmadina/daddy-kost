<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('admin.inventaris.index', compact('inventaris'));
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
            'jumlah' =>'required',
            'detail' =>'required',
            
        ]);

        Inventaris::create($request->all());
        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inventaris = Inventaris::find($id);
        return response()->json($inventaris);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inventaris = Inventaris::findOrFail($id);
        $inventaris->update($request->all());

        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil diperbarui');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->delete();
        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil dihapus');
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $inventaris = Inventaris::where('nama', 'LIKE', '%'. $request->search . '%')->get();
        } else {
            $inventaris = Inventaris::all();
        } 

        return view('admin.inventaris.index', [ 'inventaris' => $inventaris]);
    }
}
