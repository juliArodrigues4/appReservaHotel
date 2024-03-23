@extends('layout')
@section('content')

<section class="container m-5">
  <h1 class="text-center">Gerenciar dados das reservas</h1>
  <div class="container m-5">
    <form >
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite o nome do cliente" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">xxxxxxxxxxxxxxx</button>
        </div>
      </div>
    </form>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Número da reserva</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     
    @foreach($registrosReservas as $registrosReservasLoop)
      <tr>
        <th scope="row">{{$registrosReservasLoop->id}}</th>
        <td>{{$registrosReservasLoop->nome}}</td>
        <td>{{$registrosReservasLoop->funcao}}</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <form method="post" action="{{route('apagar-reserva', $registrosReservasLoop->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> Deletar reserva </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>

@endsection