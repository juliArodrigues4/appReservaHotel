<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;


Route::get('/', [ClienteController::class, 'showHome'])->name('home');

// rotas da pag. cliente
Route::get('/cadastro-cliente',        [ClienteController::class, 'showFormularioCadastro'])->name('show-form-cadastro');
Route::post('/cadastro-cliente',       [ClienteController::class, 'cadastrarCliente'])->name('envia-bd-cliente');
Route::get('/gerenciar-cliente',       [ClienteController::class, 'gerenciarCliente'])->name('gerenciar-cliente');
Route::get('/alterar-clinte',          [ClienteController::class, 'mostrarClienteId'])->name('mostrar-clinte');
Route::put('/alterar-cliente/{id}',   [ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apagar-cliente/{id}', [ClienteController::class,'destroy'])->name('apagar-cliente');



// rotas da pag. funcionario
Route::get('/cadastro-funcionario',  [FuncionarioController::class, 'showFormFuncionario'])->name('show-form-cad-funcionario');
Route::post('/cadastro-funcionario', [FuncionarioController::class, 'cadFuncionario'])->name('envia-bd-funcionario');
Route::get('/gerenciar-funcionario', [FuncionarioController::class, 'gerenciarFuncionario'])->name('gerenciar-funcionario');
Route::delete('/apagar-funcionario/{id}', [FuncionarioController::class,'destroy'])->name('apagar-funcionario');

// rotas da pag. quarto
Route::get('/cadastro-quarto',  [QuartoController::class, 'showFormAgendamento'])->name('show-form-cad-agendamento');
Route::post('/cadastro-quarto', [QuartoController::class, 'cadQuarto'])->name('envia-bd-quarto');
Route::get('/gerenciar-quarto', [QuartoController::class, 'gerenciarQuarto'])->name('gerenciar-quarto');
Route::delete('/apagar-quarto/{id}', [QuartoController::class,'destroy'])->name('apagar-quarto');

// rotas da pag. reservas
Route::get('/cadastro-reserva',   [ReservaController::class, 'showFormReserva'])->name('show-form-cad-reserva');
Route::post('/cadastro-reserva',  [ReservaController::class, 'cadReserva'])->name('envia-bd-reserva');
Route::get('/gerenciar-reservas', [ReservaController::class, 'gerenciarReservas'])->name('gerenciar-reservas');
Route::delete('/apagar-reserva/{id}', [ReservaController::class,'destroy'])->name('apagar-reserva');
