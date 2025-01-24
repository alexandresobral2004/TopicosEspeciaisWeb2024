<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/layouts.main');
});

Route::get('/clientes',[App\Http\Controllers\ClienteController::class,'index'])->name('clientes.index');

Route::get('/clientes/add', [App\Http\Controllers\ClienteController::class,'create'])->name('clientes.create');

Route::post('/clientes/store', [App\Http\Controllers\ClienteController::class,'store'])->name('clientes.store');
