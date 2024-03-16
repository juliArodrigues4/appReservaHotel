<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    public function showHome() {
        return view("home");
    }

    public function showFormularioCadastro(Request $request) {

        return view("formularioCadastroCliente");
    }

    public function cadastrarCliente(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        // outro modo de fazer estes inserts de cima -> 
        Cliente::create($dadosValidos);
        // showHome();
        // retorna a home, assim como a funacao -> return("home");

        return Redirect::route('home');
        
    }

    public function mostrarGerenciarClienteId(Cliente $id) {
        return view('xxxxx', ['registrosClientes'=> $id]);
    }

    public function gerenciarCliente(Request $request){
        $dadosCliente = Cliente::query();
        $dadosCliente->when($request->nome, function($query, $valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $dadosCliente = $dadosCliente->get();

        return view('gerenciarCliente', ['registrosClientes'=> $dadosCliente]);
    }

    public function destroy(Cliente $id){
        $id->delete();
        return Redirect::route('home');
    }

    public function alterarClienteBanco(Cliente $id, Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');
    }
}

