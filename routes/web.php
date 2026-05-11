<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\UmurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/langsung', function () {
    return redirect('/');
})->name('route.langsung');

Route::get('hallo', function () {
    return "Hallo saya fahmi, saya sedang belajar Laravel";
})->name('hallo');

// Route dengan parameter
Route::get('motor/{param}', function ($parameter) {
    $dataMotor = $parameter;
    return view('halaman.index', compact('dataMotor'));
});

// Route optional parameter
Route::get('mobil/{param?}', function ($parameter = 'belum didefinisikan') {
    return 'hallo saya punya mobil ' . $parameter;
});

// group => wajib ada prefix atau middleware yang karakternya sama.
Route::prefix('training')->group(function () {

    Route::get('welcome', function () {
        return "Hallo selamat data di training Laravel";
    });

    Route::prefix('programming')->group(function () {
        Route::get('web-developer/{parameter}', function ($parameter) {
            return "Hallo selamat data di training " . $parameter;
        });
    });
});


// Middleware untuk umur

// halaman form
Route::get('cek-umur', [UmurController::class, 'formUmur'])->name('form-umur');

Route::get('sukses', [UmurController::class, 'sukses'] )->middleware('umur')->name('umur-sukses');

// post data umur
Route::post('kirim-umur',[UmurController::class, 'proses']  )->name('kirim-data');

// cara memanggil route untuk resource
Route::resource('barang', BarangController::class);
