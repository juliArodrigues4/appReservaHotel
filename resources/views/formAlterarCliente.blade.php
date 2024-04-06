@extends('layout')
@section('content')

<section class="container mt-5"> 
  <form class="row g-3" method="Post" action="{{route('alterar-cliente', $registrosClientes->id)}}">
  @method('put')  
  @csrf
    <div class="col-md-10">
      <label for="inputNome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="inputEmail4" name="nome" value="{{old('nome', $registrosClientes->nome)}}">
      @error('nome')
      <div class="text-sm-start text-light">*Preencher o campo nome</div>
      @enderror
    </div>

    <div class="col-md-10">
      <label for="inputEmail" class="form-label">Email:</label>
      <input type="email" class="form-control" id="inputPassword4" name="email" value="{{old('email', $registrosClientes->email)}}">
      @error('email')
      <div class="text-sm-start text-light">*Preencher o campo email</div>
      @enderror
    </div>

    <div class="col-3">
      <label for="inputFone" class="form-label">Telefone:</label>
      <input type="text" class="form-control" id="inputAddress" name="fone" value="{{old('fone', $registrosClientes->fone)}}">
      @error('fone')
      <div class="text-sm-start text-light">*Preencher o campo telefone</div>
      @enderror
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

  </form>
</section>

@endsection