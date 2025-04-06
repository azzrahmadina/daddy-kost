<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all(); 
        return view('admin.menu.index', compact('menu'));
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
            'gambar' => 'image',
            'keterangan' => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/img/' , $gambar->hashName());

        menu::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $gambar->hashName(),
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return response()->json($menu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'gambar' => 'image',
            'keterangan' => 'required'
        ]);

        
        $menu = Menu::findOrFail($id);

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/img/' , $gambar->hashName());

            $menu->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'gambar' => $gambar->hashName(),
                'keterangan' => $request->keterangan
            ]);
            
        } else {
            
            $menu->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'keterangan' => $request->keterangan
            ]);
        }

        return redirect()->route('menu.index')->with('success', 'Menu berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        Storage::delete('public/img/'. $menu->gambar);
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $menu = Menu::where('nama', 'LIKE', '%'. $request->search . '%')->get();
        } else {
            $menu = Menu::all();
        } 

        return view('admin.menu.index', [ 'menu' => $menu]);
    }
}
