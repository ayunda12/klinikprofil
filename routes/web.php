<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RekanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[HomeController::class,'index']);

Route::post('/login',[LoginController::class,'login_action'])->name('login.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login',[LoginController::class,'index']);
Route::middleware(['auth.dashboard'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/layanan',[LayananController::class,'index']);
    Route::post('/data-layanan-insert', [LayananController::class,'store']);
    Route::put('/data-layanan-update/{id}', [LayananController::class,'update']);
    Route::get('/data-layanan-hapus/{id}', [LayananController::class,'destroy']);

    Route::get('/dokter',[DokterController::class,'index']);
    Route::get('/dokter-edit/{id}',[DokterController::class,'edit']);
    Route::post('/data-dokter-insert', [DokterController::class,'store']);
    Route::put('/data-dokter-update/{id}', [DokterController::class,'update']);
    Route::get('/data-dokter-hapus/{id}', [DokterController::class,'destroy']);

    Route::get('/galeri',[GaleriController::class,'index']);
    Route::post('/data-galeri-insert', [GaleriController::class,'store']);
    Route::put('/data-galeri-update/{id}', [GaleriController::class,'update']);
    Route::get('/data-galeri-hapus/{id}', [GaleriController::class,'destroy']);

    Route::get('/artikel',[ArtikelController::class,'index']);
    Route::get('/artikel-edit/{id}',[ArtikelController::class,'edit']);
    Route::post('/data-artikel-insert', [ArtikelController::class,'store']);
    Route::put('/data-artikel-update/{id}', [ArtikelController::class,'update']);
    Route::get('/data-artikel-hapus/{id}', [ArtikelController::class,'destroy']);

    Route::get('/rekan',[RekanController::class,'index']);
    Route::post('/data-rekan-insert', [RekanController::class,'store']);
    Route::put('/data-rekan-update/{id}', [RekanController::class,'update']);
    Route::get('/data-rekan-hapus/{id}', [RekanController::class,'destroy']);
 
});
