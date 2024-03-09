<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Redirect;


class FuncionarioController extends Controller
{
    public function showHome() {
        return view("home");
    }
    
    public function showFormFuncionario(Request $request){
        return view("funcionario");
    }

    public function cadFuncionario(Request $request){
        $dadosValidos = $request->validate([
            'nome'   => 'string|required',
            'funcao' => 'string|required'
        ]);

        // outro modo de fazer estes inserts de cima -> 
        Funcionario::create($dadosValidos);
        // showHome();
        // retorna a home, assim como a funacao -> return("home");
        return Redirect::route('home');
        
    }

    public function gerenciarFuncionario(){
        return view('gerenciarFuncionario');
    }
}
