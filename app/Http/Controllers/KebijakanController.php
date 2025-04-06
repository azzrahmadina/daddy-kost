<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebijakanController extends Controller
{
    public function index()
    {
        return view('kebijakan');
    }
}
