@extends('layout')
@section('content')

<section class="container mt-5"> 
  <form class="row g-3" method="Post" action="{{route('alterar-funcionario', $registrosFuncionarios->id)}}">
    @method('put')
    @csrf
    <div class="col-md-10">
      <label for="inputNome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="inputEmail4" name="nome" value="{{old('nome', $registrosFuncionarios->nome)}}">
      @error('nome')
      <div class="text-sm-start text-light">*Preencher o campo nome</div>
      @enderror
    </div>

    <div class="col-md-10">
      <label for="inputFuncao" class="form-label">Função:</label>
      <input type="text" class="form-control" id="inputPassword4" name="funcao" value="{{old('funcao', $registrosFuncionarios->funcao)}}">
      @error('funcao')
      <div class="text-sm-start text-light">*Preencher o campo função</div>
      @enderror
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

  </form>
</section>

@endsection