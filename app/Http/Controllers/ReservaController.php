<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Facades\Redirect;


class ReservaController extends Controller
{

    public function showHome() {
        return view("home");
    }

    public function showFormReserva(Request $request) {
        return view("reserva");
    }

    public function cadReserva(Request $request) {
        $dadosValidos = $request->validate([
            'idCliente'     => 'integer|required',
            'idFuncionario' => 'integer|required',
            'idQuarto'      => 'integer|required',
            'situacao'      => 'string|required',
            'valorTotal'    => 'number|required',
            'dataSaida'     => 'timestamp|required'
        ]);

        Reserva::create($dadosValidos);
        return Redirect::route('home');
    }
}