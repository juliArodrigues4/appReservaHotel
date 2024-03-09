@extends('layout')
@section('content')

<section class="container mt-5"> 
    <h1>Reserva de Quartos</h1>
  <form class="row g-3" method="Post" action="{{route('envia-bd-reserva')}}">
    @csrf
    <div class="col-md-3">
      <label for="inputIdFuncionario" class="form-label">Digite o código do funcionário:</label>
      <input type="text" class="form-control" id="inputIdFuncionario" name="idFuncionario">
    </div>

    <div class="col-md-8">
      <label for="inputNomeFuncionario" class="form-label">Nome do funcionário:</label>
      <input type="text" class="form-control" id="inputNomeFuncionario" name="nomeFuncionario">
    </div>

    <div class="col-md-3">
      <label for="inputIdFuncionario" class="form-label">Digite o código do cliente:</label>
      <input type="text" class="form-control" id="inputIdFuncionario" name="idCliente">
    </div>

    <div class="col-md-8">
      <label for="inputNomeCliente" class="form-label">Nome do cliente:</label>
      <input type="text" class="form-control" id="inputNomeCliente" name="nomeCliente">
    </div>

    <div class="col-md-3">
      <label for="inputIdQuarto" class="form-label">Digite o número do quarto:</label>
      <input type="text" class="form-control" id="inputIdQuarto" name="numeroQuarto">
    </div>

    <div class="col-md-8">
      <label for="inputValorDiaria" class="form-label">Tipo:</label>
      <input type="text" class="form-control" id="inputTipoQuarto" readonly name="tipoQuarto">
    </div>

    <div class="col-md-4">
      <label for="inputValorDiaria" class="form-label">Valor da diária:</label>
      <input type="text" class="form-control" id="inputValorDiaria" readonly name="valorDiaria">
    </div>

    <div class="col-md-4">
      <label for="inputDataSaida" class="form-label">Data de entrada:</label>
      <input type="date" class="form-control" id="inputDataSaida" name="dataEntrada">
    </div>

    <div class="col-md-3">
      <label for="inputDataSaida" class="form-label">Data de saída:</label>
      <input type="date" class="form-control" id="inputDataSaida" name="dataSaida">
    </div>

    <div class="col-md-5">
      <label for="inputValorTotal" class="form-label">Valor total:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">R$</span>
              <input type="text" class="form-control" name="valorTotal" aria-label="Dollar amount (with dot and two decimal places)">
            <span class="input-group-text">0.00</span>
        </div>
    </div>

    <div class="col-md-8">
    <label for="inputSituacao" class="form-label">Situação do pagamento:</label>
        <select class="form-select" name="situacao" aria-label="Default select example">
          <option value="Pendente">Pendente</option>
          <option value="Pago">Pago</option>
        </select>
    </div>

    <div class="col-12 mt-3 mb-5">
      <button type="submit" class="btn btn-primary">Reservar</button>
    </div>

  </form>
</section>

@endsection