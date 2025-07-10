<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MahasiswaController;//Tambahan

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Tambahan route API untuk mahasiswa
Route::apiResource('mahasiswa', MahasiswaController::class);
