<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActividadNocturnaController;
use App\Http\Controllers\EquipoController;

//API
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);


//Visualizacion
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');





Route::middleware('auth:sanctum')->group(function() {
    Route::get('/layouts', [HomeController::class, 'index'])->name('layouts');
    Route::resource('actividades', ActividadNocturnaController::class);
    Route::resource('equipos', EquipoController::class);
    Route::get('logout', [AuthController::class, 'logout']);
    
});
