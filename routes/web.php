<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\DaftarController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*splash screen*/
Route::get('/', [LandingpageController::class, 'landingpage'])->name('landingpage.splashscreen');
Route::get('/onboarding', [LandingpageController::class, 'onboarding'])->name('landingpage.onboarding');

/*daftar*/
Route::get('/loading', [DaftarController::class, 'loading'])->name('register.loading');
Route::get('/daftar', [DaftarController::class, 'daftar'])->name('register.daftar');



