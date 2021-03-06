<?php

use App\Http\Controllers\AntecedentesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Request;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//CRUD PACIENTES

Route::get('/pacientes', [PacientesController::class, 'index'])->name('pacientes');
Route::get('/pacientes/create', [PacientesController::class, 'create'])->name('create');
Route::post('create', [PacientesController::class, 'store'])->name('store');
Route::get('/pacientes/edit/{id}', [PacientesController::class, 'edit'])->name('editar');
Route::put('/pacientes/{id}', [PacientesController::class, 'update'])->name('update');
Route::delete('/pacientes/{id}',[PacientesController::class, 'destroy'])->name('destroy');

//CRUD CITAS

Route::resource('citas', CitaController::class);

// CRUD ANTECEDENTES

Route::get('/antecedentes', [PacientesController::class, 'index'])->name('antecedentes');



require __DIR__.'/auth.php';
