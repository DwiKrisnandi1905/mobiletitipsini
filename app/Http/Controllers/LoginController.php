<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loadinglogin()
    {
        return view('login.loading', [
            'title' => 'Loading',
        ]);
    }
    public function masuk()
    {
        return view('login.masuk', [
            'title' => 'halaman login',
        ]);
    }
}
