<?php

use App\Http\Controllers\ProfileController;
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

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//list pengguna
Route::get('/user', [\App\Http\Controllers\ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('user');

//daftar pengguna
Route::get('/userView/{user}', [\App\Http\Controllers\ProfileController::class, 'show'])->middleware(['auth', 'verified'])->name('userView');

//daftar koleksi
Route::get('/koleksi', [\App\Http\Controllers\CollectionController::class, 'index'])->middleware(['auth', 'verified'])->name('koleksi');

//tambah koleksi
Route::get('/koleksiTambah', [\App\Http\Controllers\CollectionController::class, 'create'])->middleware(['auth', 'verified'])->name('koleksiTambah');

//store koleksi
Route::post('/koleksiStore', [\App\Http\Controllers\CollectionController::class, 'store'])->middleware(['auth', 'verified'])->name('koleksiStore');

//show koleksi
Route::get('koleksiView{collection}', [\App\Http\Controllers\CollectionController::class, 'show'])->middleware(['auth', 'verified'])->name('koleksiView');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
