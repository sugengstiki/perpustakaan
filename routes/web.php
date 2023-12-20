<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');  
});

Route::get('/stiki/{nomer?}', function ($nomer =  "situ") {
    return view('malang',['var1' => $nomer]);  
});

Route::resource('buku', BukuController::class);
Route::get('peg/tambah',[KaryawanController::class,'create'])->name('peg.tambah');
Route::resource('peg', KaryawanController::class)->parameters(['peg' => 'karyawan']);

Route::resource('dsn', DosenController::class)->parameters(['dsn' => 'dosen']);

// Route::get('/buku',[BukuController::class,'index'])->name('buku.index');
// Route::post('/buku',[BukuController::class,'store'])->name('buku.store');
// Route::get('buku/tambah',[BukuController::class,'create'])->name('buku.create');



