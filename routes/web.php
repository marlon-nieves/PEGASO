<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* DUEÑO */
Route::get('/dueño', [App\Http\Controllers\DuenoController::class, 'index'])->middleware('auth');
Route::get('/dueño/productos', [App\Http\Controllers\DuenoController::class, 'productos'])->middleware('auth');
Route::get('/dueño/pedidos', [App\Http\Controllers\DuenoController::class, 'pedidos'])->middleware('auth');
Route::get('/dueño/clientes', [App\Http\Controllers\DuenoController::class, 'clientes'])->middleware('auth');

Route::get('/carrito', [App\Http\Controllers\DuenoController::class, 'carrito'])->middleware('auth');

/* ADMINISTRADOR */
Route::get('/administrador', [App\Http\Controllers\AdministradorController::class, 'index'])->middleware('auth');
Route::get('/administrador/domicilios', [App\Http\Controllers\AdministradorController::class, 'domicilios'])->middleware('auth');
Route::get('/administrador/pedidos', [App\Http\Controllers\AdministradorController::class, 'pedidos'])->middleware('auth');
Route::get('/administrador/clientes', [App\Http\Controllers\AdministradorController::class, 'clientes'])->middleware('auth');
Route::resource('/administrador/domiciliarios',  'App\Http\Controllers\DomiciliariosController')->middleware('auth');
Route::resource('/administrador/productos',  'App\Http\Controllers\ProductosController')->middleware('auth');
Route::resource('/administrador/vendedores',  'App\Http\Controllers\VendedoresController')->middleware('auth');