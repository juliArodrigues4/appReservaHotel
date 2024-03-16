<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    
    public function showHome() {
        return view("home");
    }

    public function showFormAgendamento(Request $request) {
        return view("quarto");
    }

    public function cadQuarto(Request $request) {
       
        $dadosValidos = $request->validate([
            'numeroQuarto' => 'integer|required',
            'tipoQuarto'   => 'string|required',
            'valorDiaria'  => 'numeric|required'
        ]);

        Quarto::create($dadosValidos);
       return Redirect::route('home');
    }

    public function gerenciarQuarto(){
        return view('gerenciarQuarto');
    }
}

