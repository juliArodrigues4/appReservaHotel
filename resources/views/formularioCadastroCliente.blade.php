@extends('layout')
@section('content')

<section class="container mt-5"> 
  <form class="row g-3" method="Post" action="{{route('envia-bd-cliente')}}">
    @csrf
    <div class="col-md-10">
      <label for="inputNome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Paulo da Silva">
    </div>

    <div class="col-md-10">
      <label for="inputEmail" class="form-label">Email:</label>
      <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="paulodasilava@gmail.com">
    </div>

    <div class="col-3">
      <label for="inputFone" class="form-label">Telefone:</label>
      <input type="text" class="form-control" id="inputAddress" name="fone" placeholder="11 23457-9086">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>

  </form>
</section>

@endsection