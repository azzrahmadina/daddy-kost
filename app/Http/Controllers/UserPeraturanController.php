<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPeraturanController extends Controller
{
    public function index() {
        return view('user/peraturan');
    }
}
