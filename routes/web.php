<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/pegawai/create',function(){
    return view('pegawai.create');
});

Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);
route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
route::put('/pegawai/{id}', [PegawaiController::class, 'update']);
