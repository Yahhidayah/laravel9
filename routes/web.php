<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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

Route::get('/',function() {
    return view('welcome');
});

Route::get('/admin',function() {
    return view('admin');
});


Route::get('/Siswa',function() {
    return view('admin');
});

Route::get('/tampilan', function() {
    return view('tampilan');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route ::get('/sekolah', [SekolahController::class, 'index']) -> name('sekolahs.index');
Route ::get('/sekolah/tambah', [SekolahController::class, 'tambah']) ->name('sekolahs.tambah');
Route ::post('/sekolah', [SekolahController::class, 'simpan']) ->name('sekolah.simpan');
Route ::get('/sekolah/{id}/edit', [SekolahController::class, 'edit']) -> name('sekolahs.edit');
Route ::put('/sekolah/{id}', [SekolahController::class, 'update']) ->name('sekolahs.update');
Route ::delete('/sekolah/{id}', [SekolahController::class, 'hapus']) ->name('sekolahs.hapus');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


