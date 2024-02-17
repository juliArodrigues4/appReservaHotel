<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showFormFuncionario(Request $request){
        return view("funcionario");
    }
}
