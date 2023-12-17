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
Route::get('/home',[\App\Http\Controllers\HomeController::class,'redirect'])->middleware('auth','verified');
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
Route::get('/showappointment',[\App\Http\Controllers\AdminController::class,'showappointment']);
Route::get('/approved/{id}',[\App\Http\Controllers\AdminController::class,'approved']);
Route::get('/cancelled/{id}',[\App\Http\Controllers\AdminController::class,'cancelled']);
Route::get('/showdoctor',[\App\Http\Controllers\AdminController::class,'showdoctor'])->name('doctors');
Route::get('/delete_doctor/{id}',[\App\Http\Controllers\AdminController::class,'delete_doctor']);
Route::get('/update_doctor/{id}',[\App\Http\Controllers\AdminController::class,'update_doctor']);
Route::post('/edit_doctor/{id}',[\App\Http\Controllers\AdminController::class,'edit_doctor']);
Route::get('/emailview/{id}',[\App\Http\Controllers\AdminController::class,'emailview']);
Route::post('/sendemail/{id}',[\App\Http\Controllers\AdminController::class,'sendemail']);
