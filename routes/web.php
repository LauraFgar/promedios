<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
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
    return view('usuarios');
});

Route::get('/usuarios', [UsuariosController::class, 'listar'])->name('usuarios.listar');
Route::delete('/usuarios/{id}', [UsuariosController::class, 'eliminar'])->name('usuarios.eliminar');
Route::post('/usuarios/registrar', [UsuariosController::class, 'registrar'])->name('usuarios.registrar');



