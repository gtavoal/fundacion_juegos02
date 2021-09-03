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

Route::get('/empresas', [App\Http\Controllers\EmpresasController::class, 'index'])->name('empresas.index');
Route::get('/empresas/create', [App\Http\Controllers\EmpresasController::class, 'create'])->name('empresas.create');
Route::post('/empresas/store', [App\Http\Controllers\EmpresasController::class, 'store'])->name('empresas.store');
Route::get('/empresas/show/{id}', [App\Http\Controllers\EmpresasController::class, 'show'])->name('empresas.show');
Route::get('/empresas/edit/{id}', [App\Http\Controllers\EmpresasController::class, 'edit'])->name('empresas.edit');
Route::put('/empresas/update/{id}', [App\Http\Controllers\EmpresasController::class, 'update'])->name('empresas.update');
Route::delete('/empresas/delete/{id}', [App\Http\Controllers\EmpresasController::class, 'delete'])->name('empresas.delete');

Route::get('/juegos', [App\Http\Controllers\JuegosController::class, 'index'])->name('juegos.index');
Route::get('/juegos/create', [App\Http\Controllers\JuegosController::class, 'create'])->name('juegos.create');
Route::post('/juegos/store', [App\Http\Controllers\JuegosController::class, 'store'])->name('juegos.store');
Route::get('/juegos/show/{id}', [App\Http\Controllers\JuegosController::class, 'show'])->name('juegos.show');
Route::get('/juegos/edit/{id}', [App\Http\Controllers\JuegosController::class, 'edit'])->name('juegos.edit');
Route::put('/juegos/update/{id}', [App\Http\Controllers\JuegosController::class, 'update'])->name('juegos.update');
Route::delete('/juegos/delete/{id}', [App\Http\Controllers\JuegosController::class, 'delete'])->name('juegos.delete');


