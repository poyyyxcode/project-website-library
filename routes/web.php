<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DitandaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Console\DocsCommand;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/home', [HomeController::class, 'show'])->name('home');

Route::get('/daftar_peminjaman', function () {
    return view('daftar_peminjaman.daftar_peminjaman');
});
Route::get('/cari', [HomeController::class, 'search']);

// Route for guest
Route::group(['middleware' => ['guest']], function() {
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login']);

});
// Route for authenticated user
Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', [LogoutController::class, 'perform']);
    Route::get('/ditandai', [DitandaiController::class, 'show']);
    Route::get('/daftar_peminjaman', [PinjamController::class, 'show']);
    
    Route::get('/tandai/{buku:slug}', [DitandaiController::class, 'tandai']);
    Route::get('/hapus_penanda/{buku:slug}', [DitandaiController::class, 'hapus_penanda']);
    
    
    Route::get('/pinjam/{buku:slug}', [PinjamController::class, 'pinjam']);
    Route::get('/kembalikan/{buku:slug}', [PinjamController::class, 'kembalikan']);
});

// Route for admin
Route::group(['middleware' => 'admin'], function () {
    Route::resource('/dashboard', DashboardController::class);
});