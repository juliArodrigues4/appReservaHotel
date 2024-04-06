@extends('layout')
@section('content')

<section class="container mr-20 ml-20 mt-50">
  <h1 class="text-center">Gerenciar dados do Funcionario</h1>
  <div class="container m-5">
    <form >
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do funcionário" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Função</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     @foreach($registrosFuncionario as $registrosFuncionarioLoop)
      <tr>
        <th scope="row">{{$registrosFuncionarioLoop->id}}</th>
        <td>{{$registrosFuncionarioLoop->nome}}</td>
        <td>{{$registrosFuncionarioLoop->funcao}}</td>
        <td>
          <a href="{{route('mostrar-funcionario', $registrosFuncionarioLoop->id)}}">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <form method="post" action="{{route('apagar-funcionario', $registrosFuncionarioLoop->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> Deletar funcionário </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>

@endsection