<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;

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

Route::get('/', [ClienteController::class, 'showHome'])->name('home');
Route::get('/cadastro-cliente', [ClienteController::class, 'showFormularioCadastro'])->name('show-form-cadastro');
Route::get('/cadastro-funcionario', [FuncionarioController::class, 'showFormFuncionario'])->name('show-form-cad-funcionario');
Route::post('/cadastro-cliente', [ClienteController::class, 'cadastrarCliente'])->name('envia-bd-cliente');
Route::post('/cadastro-funcionario', [FuncionarioController::class, 'cadFuncionario'])->name('envia-bd-funcionario');