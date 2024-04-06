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

    public function mostrarQuartoId(Quarto $id) {
        return view('formAlterarQuarto', ['registrosQuarto'=> $id]);
    }

    public function gerenciarQuarto(Request $request){
        $dadosQuarto = Quarto::query();
        $dadosQuarto->when($request->numeroQuarto, function($query, $valor){
            $query->where('numeroQuarto','like','%'.$valor.'%');
        });
        $dadosQuarto = $dadosQuarto->get();

        return view('gerenciarQuarto', ['registrosQuarto'=> $dadosQuarto]);
    }

    public function destroy(Quarto $id){
        $id->delete();
        return Redirect::route('home');
    }

    public function alterarQuartoBanco(Quarto $id, Request $request){
        $dadosValidos = $request->validate([
            'numeroQuarto' => 'integer|required',
            'tipoQuarto'   => 'string|required',
            'valorDiaria'  => 'numeric|required'
        ]);

        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');
    }
}

