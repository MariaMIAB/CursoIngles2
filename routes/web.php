<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\RolController;

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
Route::resource('user', UserController::class);
Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}',[UserController::class, 'update'])->name('user.update');
Route::resource('rol', RolController::class);
Route::get('rol/{id}', [RolController::class, 'show'])->name('rol.show');
Route::get('rol/{rol}/edit', [RolController::class, 'edit'])->name('rol.edit');
Route::put('rol/{rol}',[RolController::class, 'update'])->name('rol.update');
Route::resource('actividadad', ActividadController::class);
Route::resource('curso', CursosController::class);
Route::get('curso/{id}', [CursosController::class, 'show'])->name('curso.show');
Route::get('curso/{curso}/edit', [CursosController::class, 'edit'])->name('curso.edit');
Route::put('curso/{curso}',[CursosController::class, 'update'])->name('curso.update');
Route::resource('asistencia', AsistenciaController::class);
Route::resource('evaluacion', EvaluacionController::class);
Route::resource('materia', MateriaController::class);
Route::get('materia/{materia}', [MateriaController::class, 'show'])->name('materia.show');
Route::get('materia/{materia}/edit', [MateriaController::class, 'edit'])->name('materia.edit');
Route::put('materia/{materia}',[MateriaController::class, 'update'])->name('materia.update');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
