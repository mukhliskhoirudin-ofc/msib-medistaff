<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

//route doctor versi resource:
Route::resource('doctor', DoctorController::class)->names('doctor');
//tambahan jika costum pakai uuid/slug/dll
Route::get('doctor/{doctor:uuid}', [DoctorController::class, 'show'])->name('doctor.show');


//route doctor versi manual:
// Route::get('doctor', [DoctorController::class, 'index']);
// Route::get('doctor/create', [DoctorController::class, 'create']);
// Route::post('doctor', [DoctorController::class, 'store']);
// Route::get('doctor/{doctor:uuid}', [DoctorController::class, 'show'])->name('doctor.show');
// Route::get('doctor/{doctor}/edit', [DoctorController::class, 'edit']);
// Route::put('doctor/{doctor}', [DoctorController::class, 'update']);
// Route::delete('doctor/{doctor}', [DoctorController::class, 'destroy']);