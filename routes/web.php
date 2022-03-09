<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\{
    PenelitianController,
    AdminController,
};

use App\Models\{
    Penelitian,
    Manfaat,
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
    $penelitians = Penelitian::where('status', true)->latest()->take(4)->get();

    return view('home',[
        'penelitians' => $penelitians,
    ]);
});

Route::get('/publikasi/{id}', function ($id) {
    $penelitian = Penelitian::findOrFail($id);

    return view('publikasi-detail',[
        'penelitian' => $penelitian,
    ]);
});

Route::get('/sukses', function () {
    return view('sukses');
});

Route::get('/kns', function (Request $request) {
    if($nama=$request->query('q')){
        $manfaat = Manfaat::findOrFail($nama);
        $penelitians = $manfaat->penelitians()->where('status', true)->latest()->get();
    } else {
        $penelitians = [];
    }
    $manfaats = Manfaat::get();
    return view('kns', [
        'manfaats' => $manfaats,
        'penelitians' => $penelitians,
    ]);
});

Route::get('/kamus', function (Request $request) {
    if($nama=$request->query('q')){
        $penelitians = Penelitian::where('status', true)->where('nama', 'like', "%$nama%")->latest()->get();
    } else {
        $penelitians = Penelitian::where('status', true)->latest()->take(4)->get();
    }
    return view('kamus', [
        'penelitians' => $penelitians,
    ]);
});

Route::get('/sukses-upload', function () {
    return view('sukses-upload');
});

Route::middleware(['auth'])->get('/publikasi', [PenelitianController::class, 'index']);
Route::middleware(['auth'])->post('/publikasi', [PenelitianController::class, 'store']);

Route::middleware(['auth'])->get('/admin', [AdminController::class, 'index']);
Route::middleware(['auth'])->get('/manfaat', [AdminController::class, 'manfaat']);
Route::middleware(['auth'])->post('/manfaat', [AdminController::class, 'manfaatStore']);
Route::middleware(['auth'])->post('/manfaat/{id}', [AdminController::class, 'deleteManfaat']);
Route::middleware(['auth'])->post('/admin-terima/{id}', [AdminController::class, 'updatePenelitian']);
Route::middleware(['auth'])->post('/admin-tolak/{id}', [AdminController::class, 'deletePenelitian']);

require __DIR__.'/auth.php';
