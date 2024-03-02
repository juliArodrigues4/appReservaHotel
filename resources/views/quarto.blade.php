@extends('layout')
@section('content')

<section class="container mt-5"> 
  <form class="row g-3" method="Post" action="{{route('envia-bd-quarto')}}">
    @csrf
    <div class="col-md-10">
      <label for="inputNumero" class="form-label">Número do quarto:</label>
      <input type="text" class="form-control" id="inputNumero" name="numero" placeholder="A12">
    </div>

    <div class="col-md-10">
        <select class="form-select" name="tipo" aria-label="Default select example">
          <option selected>Tipo de quarto:</option>
          <option value="1">Class A+</option>
          <option value="2">Comercial</option>
          <option value="3">Suite</option>
        </select>
    </div>

    <div class="col-md-10">
      <label for="inputValor" class="form-label">Valor:</label>
      <input type="text" class="form-control" id="inputValor" name="valor">
    </div>

    <div class="col-12 mt-5">
      <button type="submit" class="btn btn-primary">Agendar</button>
    </div>

  </form>
</section>

@endsection