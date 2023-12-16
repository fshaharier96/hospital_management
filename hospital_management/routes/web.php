<?php

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


Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/home',[\App\Http\Controllers\HomeController::class,'redirect']);
Route::post('/appointment',[\App\Http\Controllers\HomeController::class,'appointment']);
Route::get('/myappointment',[\App\Http\Controllers\HomeController::class,'myappointment']);
Route::get('/cancel_appointment/{id}',[\App\Http\Controllers\HomeController::class,'cancel_appoint']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[\App\Http\Controllers\AdminController::class,'addView']);
Route::post('/upload_doctor',[\App\Http\Controllers\AdminController::class,'upload']);
