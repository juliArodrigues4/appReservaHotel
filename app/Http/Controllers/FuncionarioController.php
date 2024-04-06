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

    public function mostrarFuncionarioId(Funcionario $id){
        return view('formAlterarFun', ['registrosFuncionarios'=> $id]);
    }

    public function gerenciarFuncionario(Request $request){
        $dadosFuncionario = Funcionario::query();
        $dadosFuncionario->when($request->nome, function($query, $valor){
            $query->where('nome', 'like', '%'.$valor.'%');
        });
        $dadosFuncionario = $dadosFuncionario->get();

        return view('gerenciarFuncionario', ['registrosFuncionario' => $dadosFuncionario]);
    }

    public function destroy(Funcionario $id){
        $id->delete();
        return Redirect::route('home');

    }

    public function alterarFuncionarioBanco(Funcionario $id, Request $request){
        $dadosValidos = $request->validate([
            'nome'    => 'string|required',
            'funcao' => 'string|required'
        ]);

        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');
    }
}
