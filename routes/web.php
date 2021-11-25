<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CronogramaController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\HomeController;

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
Route::resource('home', HomeController::class);
Route::resource('usuario', UsuarioController::class);
Route::get('usuario/{id}', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('usuario/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('usuario/{usuario}',[UsuarioController::class, 'update'])->name('usuario.update');
Route::resource('materia', MateriaController::class);
Route::resource('rol', RolController::class);
Route::get('rol/{id}', [RolController::class, 'show'])->name('rol.show');
Route::get('rol/{rol}/edit', [RolController::class, 'edit'])->name('rol.edit');
Route::put('rol/{rol}',[RolController::class, 'update'])->name('rol.update');
Route::resource('actividades', ActividadController::class);
Route::resource('cronograma', CronogramaController::class);
Route::get('cronograma/{id}', [CronogramaController::class, 'show'])->name('cronograma.show');
Route::get('cronograma/{cronograma}/edit', [CronogramaController::class, 'edit'])->name('cronograma.edit');
Route::put('cronograma/{cronograma}',[CronogramaController::class, 'update'])->name('cronograma.update');
Route::resource('asistencia', AsistenciaController::class);
Route::resource('evaluacion', EvaluacionController::class);
Route::resource('notas', NotasController::class);
Route::resource('tema', TemaController::class);
Route::get('tema/{id}', [TemaController::class, 'show'])->name('tema.show');
Route::get('tema/{tema}/edit', [TemaController::class, 'edit'])->name('tema.edit');
Route::put('tema/{tema}',[TemaController::class, 'update'])->name('tema.update');
Route::resource('contactanos', ContactanosController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
