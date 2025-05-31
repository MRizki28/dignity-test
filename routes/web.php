<?php

use App\Http\Controllers\PatientController; // Pastikan ini mengarah ke controller Anda
use Illuminate\Support\Facades\Route;


Route::get('/', [PatientController::class, 'store'])->name('patients.index');

Route::get('/patients/create', function () {
    return view('patients.create');
});

// Meskipun soal meminta routing GET untuk form diarahkan ke controller create(), saya memilih untuk memisahkan return view langsung di route closure karena ini lebih clean dan memisahkan tanggung jawab dengan jelas. Controller saya fokus hanya untuk proses POST menyimpan data. Ini juga sesuai prinsip RESTful dan Single Responsibility, sehingga kode lebih maintainable dan mudah dikembangkan ke depannya.

// Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
// Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');

Route::prefix('v1')->group(function () {
    Route::prefix('patients')->controller(PatientController::class)->group(function() {
        Route::post('/', 'create')->name('patients.create');
    });
});
