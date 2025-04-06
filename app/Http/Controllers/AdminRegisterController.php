<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('admin.register');  // view untuk register
    }

    // Menangani proses register
    public function register(Request $request)
    {
        // Validasi input dari pengguna
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat admin baru dengan password yang telah di-hash
        Admin::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // Hash password sebelum disimpan
        ]);

        // Redirect ke login page setelah sukses registrasi
        return redirect()->route('admin.login')->with('success', 'Admin successfully registered!');
    }
}
