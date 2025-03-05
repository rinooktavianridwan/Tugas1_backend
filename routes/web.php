<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tokos/jumlahproduks', [TokoController::class, 'getProdukCount']);
Route::apiResource('tokos', TokoController::class);
Route::apiResource('produks', ProdukController::class);
Route::get('/produks/{id}/tokos', [ProdukController::class, 'getToko']);

