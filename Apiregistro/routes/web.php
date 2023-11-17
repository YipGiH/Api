<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ListarController;
use App\Http\Controllers\ExportarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Procesa el formulario de registro
Route::post('/registro', [RegistroController::class, "store"]);

// Muestra el formulario de registro
Route::get('/registro', [RegistroController::class, "index"])->name('register');
Route::get('/usuarios', [ListarController::class, "index"])->name('listar');
Route::get('/usuarios/{id}/exportar-pdf', [ExportarController::class, 'exportarPDF'])->name('usuarios.exportar-pdf');

// Route::get('welcome',[RegistroController::class,"index"])->name('welcome');
