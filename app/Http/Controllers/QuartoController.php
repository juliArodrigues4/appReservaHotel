<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    
    public function showHome() {
        return viw("home");
    }

    public function showFormAgendamento(Request $request) {
        return view("quarto");
    }

    public function cadQuarto(Request $request) {
       
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo'   => 'string|required',
            'valor'  => 'numeric|required'
        ]);
        Quarto::create($dadosValidos);
        return Redirect::route('home');
    }
}
