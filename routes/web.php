<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\areasController;
use App\Http\Controllers\gruposController;
use App\Http\Controllers\registrosController;
use App\Http\Controllers\statusController;
use App\Http\Controllers\usuariosController;

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

Route::get('/', HomeController::class);

Route::get('empleados', [areasController::class, 'areas'])->name('areas');

Route::get('empleados/grupos', [gruposController::class, 'grupos'])->name('grupos');

Route::get('empleados/status', [statusController::class, 'status'])->name('status');

Route::get('empleados/usuarios', [usuariosController::class, 'usuarios'])->name('usuarios');

Route::get('empleados/registros', [registrosController::class, 'registros'])->name('registros');