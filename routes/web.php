<?php
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
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

Route::get('/', [BukuController::class, 'welcome'] );
Auth::routes();

Route::middleware('auth')->group(function () {
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/tambah', [KategoriController::class,'create'])->name('kategori.create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::delete('/kategori/destroy/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/tambah', [BukuController::class, 'create'])->name('buku.create');
Route::delete('/buku/destroy/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/tambah', [PeminjamanController::class, 'tambahPeminjaman'])->name('peminjaman.tambah');
Route::post('/peminjaman/store', [PeminjamanController::class, 'storePeminjaman'])->name('peminjaman.store');
Route::post('/peminjaman/selesai/{id}', [PeminjamanController::class, 'kembalikanBuku'])->name('peminjaman.kembalikan');
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::patch('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
Route::get('/report', [PeminjamanController::class, 'print'])->name('print'); 
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
