<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActividadNocturnaController;
use App\Http\Controllers\EquipoController;


Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);



Route::middleware('auth:sanctum')->group(function() {
    Route::resource('actividades', ActividadNocturnaController::class);
    Route::resource('equipos', EquipoController::class);
    Route::get('logout', [AuthController::class, 'logout']);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
