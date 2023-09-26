<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;


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
Route::get('/loadingdaftar', [DaftarController::class, 'loadingdaftar'])->name('register.loading');
Route::get('/daftar', [DaftarController::class, 'daftar'])->name('register.daftar');

/*masuk*/
Route::get('/loadinglogin', [LoginController::class, 'loadinglogin'])->name('login.loading');
Route::get('/masuk', [LoginController::class, 'masuk'])->name('login.masuk');

/* forgot password */
Route::get('/lupapassword', [ForgotPasswordController::class, 'index'])->name('forgot.index');


