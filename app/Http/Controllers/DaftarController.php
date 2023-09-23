<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function loadingdaftar()
    {
        return view('register.loading', [
            'title' => 'Loading',
        ]);
    }
    public function daftar()
    {
        return view('register.daftar', [
            'title' => 'daftar',
        ]);
    }
}
