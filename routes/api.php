<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/nilaiRT', [NilaiController::class, 'getNilaiRT']);
Route::get('/nilaiST', [NilaiController::class, 'getNilaiST']);
