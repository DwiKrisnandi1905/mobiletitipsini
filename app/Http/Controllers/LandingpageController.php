<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        return view('landingpage.splashscreen', [
            'title' => 'Splash Screen',
        ]);
    }
    public function onboarding()
    {
        return view('landingpage.onboarding', [
            'title' => 'Onboarding',
        ]);
    }
}
