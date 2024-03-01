<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Vista_Producto');
});

Route::get('/Crear_Producto', function () {
    return view('Crear_Producto');
})->name('Producto.Crear');