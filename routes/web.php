<?php

use App\Http\Controllers\Products\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS DE PRODUCTOS
Route::get('/Productos/index', [ProductsController::class, 'index'])->name('productos.index');
Route::get('/Productos/create', [ProductsController::class, 'create'])->name('productos.create');
Route::post('/Productos/store', [ProductsController::class, 'store'])->name('productos.store');
Route::get('/Productos/edit/{producto}', [ProductsController::class, 'edit'])->name('productos.edit');
Route::put('/Productos/update/{producto}', [ProductsController::class, 'update'])->name('productos.update');
Route::post('/Productos/delete/', [ProductsController::class, 'destroy'])->name('productos.delete');