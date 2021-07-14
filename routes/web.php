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
    return view('auth.login');
});

//Auth::routes(['register'=>false]); //opciones que no se van a mostrar 
Auth::routes(); //opciones que no se van a mostrar 

//Ruta para acceder al controlador de la table clientes mientras el usuario este autorizado "middleware" 
Route::resource('clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('empresas',App\Http\Controllers\EmpresaController::class)->middleware('auth');
Route::resource('servicios',App\Http\Controllers\ServicioController::class)->middleware('auth');
Route::resource('registros',App\Http\Controllers\RegistroController::class)->middleware('auth');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
