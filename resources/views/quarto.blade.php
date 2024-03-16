@extends('layout')
@section('content')

<section class="container mt-5"> 
<form class="row g-3" method="Post" action="{{route('envia-bd-quarto')}}">
    @csrf
    <div class="col-md-10">
      <label for="inputnumeroQuarto" class="form-label">Número do quarto:</label>
      <input type="text" class="form-control" id="inputnumeroQuarto" name="numeroQuarto" placeholder="12">
    </div>

    <div class="col-md-10">
        <select class="form-select" name="tipoQuarto" aria-label="Default select example">
          <option selected>Tipo de quarto:</option>
          <option value="Class A+">Class A+</option>
          <option value="Comercial">Comercial</option>
          <option value="Suite">Suite</option>
        </select>
    </div>

    <div class="col-md-10">
      <label for="inputvalorQuarto" class="form-label">Valor:</label>
      <input type="text" class="form-control" id="inputvalorQuarto" name="valorDiaria">
    </div>

    <div class="col-12 mt-5">
      <button type="submit" class="btn btn-primary">Agendar</button>
    </div>

  </form>
</section>

@endsection