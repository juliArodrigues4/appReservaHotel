@extends('layout')
@section('content')

<section class="container m-5">
  <h1 class="text-center">Gerenciar dados dos quartos</h1>
  <div class="container m-5">
    <form >
      <div class="row center">
        <div class="col">
          <input type="text" id="numeroQuarto" name="numeroQuarto" class="form-control" placeholder="Digite o número do quarto" aria-label="First name">
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
        <th scope="col">Número do quarto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registrosQuarto as $registrosQuartoLoop )
      <tr>
        <th scope="row">{{$registrosQuartoLoop->id}}</th>
        <td>{{$registrosQuartoLoop->numeroQuarto}}</td>
        <td>{{$registrosQuartoLoop->tipoQuarto}}</td>
        <td>
          <a href="{{route('mostrar-quarto', $registrosQuartoLoop->id)}}">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
            <form method="post" action="{{route('apagar-quarto', $registrosQuartoLoop->id)}}">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger"> Deletar </button>
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection