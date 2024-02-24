@extends('layout')
@section('content')

<section class="container mt-5"> 
  <form class="row g-3" method="Post" action="{{route('envia-bd-funcionario')}}">
    @csrf
    <div class="col-md-10">
      <label for="inputNome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Paulo da Silva">
    </div>

    <div class="col-md-10">
      <label for="inputFuncao" class="form-label">Função:</label>
      <input type="text" class="form-control" id="inputPassword4" name="funcao" placeholder="Recepcionista">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>

  </form>
</section>

@endsection