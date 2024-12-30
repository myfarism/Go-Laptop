<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\Admin\LaptopController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PenyewaanController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/solusi', function () {
    return view('solusi');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/form_pengisian/{kode}/{nama}/{harga}', [RentalController::class, 'showFormPengisian'])->name('form_pengisian');
Route::post('/form_pengisian', [RentalController::class, 'handleFormPengisian'])->name('form_pengisian.submit');
Route::get('/form_ketentuan', [RentalController::class, 'showFormKetentuan'])->name('form_ketentuan');
Route::post('/form_ketentuan', [RentalController::class, 'confirmRental'])->name('form_ketentuan.confirm');



Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
Route::get('/sewa', [SewaController::class, 'index'])->name('sewa');
//Route::get('/form-ketentuan', [FormKetentuanController::class, 'formKetentuan'])->name('form_ketentuan');




// admin
// Rute login admin (tanpa middleware auth)
Route::get('admin/login', function () {
    return view('admin.login');
})->name('login');

// Rute proses login
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');

// Rute logout
Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->group(function () {
    // Login routes (tidak perlu auth middleware)
    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');
    
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    // Protected admin routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/laptops', [LaptopController::class, 'store'])->name('admin.laptops.store');
    Route::put('/laptops/{kode}', [LaptopController::class, 'update'])->name('admin.laptops.update');
    Route::delete('/laptops/{laptop}', [LaptopController::class, 'destroy'])->name('admin.laptops.destroy');
});


//Penyewaan
Route::post('/penyewaan/konfirmasi/{id}', [PenyewaanController::class, 'konfirmasi'])->name('penyewaan.konfirmasi');
Route::delete('/penyewaan/hapus/{id}', [PenyewaanController::class, 'hapus'])->name('penyewaan.hapus');