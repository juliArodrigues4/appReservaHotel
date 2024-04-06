@extends('layout')
@section('content')

<section class="container mt-5"> 
<form class="row g-3" method="Post" action="{{route('alterar-quarto', $registrosQuarto->id)}}">
   @method('put')
   @csrf
    <div class="col-md-10">
      <label for="inputnumeroQuarto" class="form-label">Número do quarto:</label>
      <input type="text" class="form-control" id="inputnumeroQuarto" name="numeroQuarto" value="{{old('numeroQuarto', $registrosQuarto->numeroQuarto) }}">
      @error('numeroQuarto')
      <div class="text-sm-start text-light">*Preencher o campo email</div>
      @enderror
    </div>

    <div class="col-md-10">
        <select class="form-select" name="tipoQuarto" aria-label="Default select example" value="{{old('tipoQuarto', $registrosQuarto->tipoQuarto) }}">
          <option selected>Tipo de quarto:</option>
          <option value="Class A+">Class A+</option>
          <option value="Comercial">Comercial</option>
          <option value="Suite">Suite</option>
        </select>
      @error('tipoQuarto')
      <div class="text-sm-start text-light">*Preencher o campo email</div>
      @enderror
    </div>

    <div class="col-md-10">
      <label for="inputvalorQuarto" class="form-label">Valor:</label>
      <input type="text" class="form-control" id="inputvalorQuarto" name="valorDiaria" value="{{old('valorDiaria', $registrosQuarto->valorDiaria) }}">
      @error('valorDiaria')
      <div class="text-sm-start text-light">*Preencher o campo email</div>
      @enderror
    </div>

    <div class="col-12 mt-5">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

  </form>
</section>

@endsection