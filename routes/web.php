<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LoginController;

use App\Models\Doctor;
use App\Models\Appointment;

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    if (!session('logged_in')) {
        return redirect('/');
    }

    $doctorCount = Doctor::count();

    $appointmentCount = Appointment::count();

    return view('dashboard', compact(
        'doctorCount',
        'appointmentCount'
    ));

});

/*
|--------------------------------------------------------------------------
| Doctors
|--------------------------------------------------------------------------
*/

Route::resource('doctors', DoctorController::class);

/*
|--------------------------------------------------------------------------
| Appointments
|--------------------------------------------------------------------------
*/

Route::resource('appointments', AppointmentController::class);