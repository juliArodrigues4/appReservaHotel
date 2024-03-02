<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;


Route::get('/', [ClienteController::class, 'showHome'])->name('home');

Route::get('/cadastro-cliente', [ClienteController::class, 'showFormularioCadastro'])->name('show-form-cadastro');
Route::post('/cadastro-cliente', [ClienteController::class, 'cadastrarCliente'])->name('envia-bd-cliente');

Route::get('/cadastro-funcionario', [FuncionarioController::class, 'showFormFuncionario'])->name('show-form-cad-funcionario');
Route::post('/cadastro-funcionario', [FuncionarioController::class, 'cadFuncionario'])->name('envia-bd-funcionario');

Route::get('/cadastro-quarto', [QuartoController::class, 'showFormAgendamento'])->name('show-form-cad-agendamento');
Route::post('/cadastro-quarto', [QuartoController::class, 'cadQuarto'])->name('envia-bd-quarto');

Route::get('/cadastro-reserva', [ReservaController::class, 'showFormReserva'])->name('show-form-cad-reserva');
Route::post('/cadastro-reserva', [ReservaController::class, 'cadReserva'])->name('envia-bd-reserva');
