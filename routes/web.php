<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PenelitianController,
};

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

Route::get('/', function () {
    return view('home');
});

Route::get('/sukses', function () {
    return view('sukses');
});

Route::get('/sukses-upload', function () {
    return view('sukses-upload');
});

Route::middleware(['auth'])->get('/publikasi', [PenelitianController::class, 'index']);
Route::middleware(['auth'])->post('/publikasi', [PenelitianController::class, 'store']);

require __DIR__.'/auth.php';
