<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Form login untuk admin
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('home'); // Redirect ke dashboard admin
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
