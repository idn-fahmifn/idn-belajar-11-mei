<?php

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
Route::get('cek-umur', function () {

    // tampilkan halaman form
    return view('umur.form');
})->name('form-umur');

Route::get('sukses', function () {

    // tampilkan halaman sukses
    return view('umur.sukses');
})->name('umur-sukses');

// post data umur
Route::post('kirim-umur', function (Request $request) {
    // tampilkan semua request yang diinput dari form.

    $request->validate([
        'name' => 'required|string|min:3|max:30',
        'age' => 'required|integer|min:3|max:99',
    ], [
        'name.required' => 'Input name wajib diisi',
        'name.string' => 'Input name wajib berupa karakter',
        'name.min' => 'Input name wajib minimal 3 karakter',
        'name.max' => 'Input name wajib maximal 30 karakter',

        'age.required' => 'Input name wajib diisi',
        'age.integer' => 'Input name wajib berupa angka',
        'age.min' => 'Input name wajib minimal 3 tahun',
        'age.max' => 'Input name wajib maximal 99 tahun',
    ]);

    // return redirect()->route('umur-sukses');
})->name('kirim-data');
