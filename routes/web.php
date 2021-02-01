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
Route::get('/', [\App\Http\Controllers\InicioController::class, 'inicio'] )->name('home');

Route::get('animales', [\App\Http\Controllers\AnimalController::class, 'index'])->name('animales.index');

Route::get('animales/create', [\App\Http\Controllers\AnimalController::class, 'create'])->name('animales.create');

Route::get('animales/{animales}', [\App\Http\Controllers\AnimalController::class, 'show'])->name('animales.show');

Route::get('animales/{animal}/edit', [\App\Http\Controllers\AnimalController::class, 'edit'])->name('animales.edit');

Route::post('animales', [\App\Http\Controllers\AnimalController::class, 'store'])->name('animales.store');

Route::put('animales/{animal}', [\App\Http\Controllers\AnimalController::class, 'update'])->name('animales.update');

Route::get('revisiones/{animal}/create', [\App\Http\Controllers\RevisionController::class, 'create'])->name('revisiones.create');
Route::post('revisiones/create', [\App\Http\Controllers\RevisionController::class, 'store'])->name('revisiones.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    return view('dashboard');
    
})->name('dashboard');
