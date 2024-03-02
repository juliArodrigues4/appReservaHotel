@extends('layout')
@section('content')

<section class="container mt-5"> 
    <h1>Reserva de Quartos</h1>
  <form class="row g-3" method="Post" action="{{route('envia-bd-reserva')}}">
    @csrf
    <div class="col-md-10">
      <label for="inputIdFuncionario" class="form-label">Digite o código do funcionário:</label>
      <input type="text" class="form-control" id="inputIdFuncionario" name="idFucionario">
    </div>

    <div class="col-md-10">
      <label for="inputNomeFuncionario" class="form-label">Nome do funcionário:</label>
      <input type="number" class="form-control" id="inputNomeFuncionario" name="nomeFun">
    </div>

    <div class="col-md-10">
      <label for="inputIdFuncionario" class="form-label">Digite o código do cliente:</label>
      <input type="text" class="form-control" id="inputIdFuncionario" name="nomeFuncionario">
    </div>

    <div class="col-md-10">
      <label for="inputNomeCliente" class="form-label">Nome do cliente:</label>
      <input type="number" class="form-control" id="inputNomeCliente" name="nomeCliente">
    </div>

    <div class="col-md-10">
      <label for="inputIdQuarto" class="form-label">Digite o número do quarto:</label>
      <input type="text" class="form-control" id="inputIdQuarto" name="idQuarto">
    </div>

    <div class="col-md-10">
      <label for="inputValorDiaria" class="form-label">Tipo:</label>
      <input type="text" class="form-control" id="inputTipoQuarto" name="tipoQuarto">
    </div>

    <div class="col-md-10">
      <label for="inputValorDiaria" class="form-label">Valor da diária:</label>
      <input type="number" class="form-control" id="inputValorDiaria" readonly name="valorDiaria">
    </div>

    <div class="col-md-10">
      <label for="inputDataSaida" class="form-label">Data de entrada:</label>
      <input type="date" class="form-control" id="inputDataSaida" name="dataEntrada">
    </div>

    <div class="col-md-10">
      <label for="inputDataSaida" class="form-label">Data de saída:</label>
      <input type="date" class="form-control" id="inputDataSaida" name="dataSaida">
    </div>

    <div class="col-md-10">
      <label for="inputValorTotal" class="form-label">Valor total:</label>
      <input type="text" class="form-control" id="inputValorTotal" readonly name="valorTotal">
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <span class="input-group-text">0.00</span>
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
        </div>
    </div>

    <div class="col-md-10">
    <label for="inputSituacao" class="form-label">Situação do pagamento:</label>
        <select class="form-select" aria-label="Default select example">
          <option value="1">Pendente</option>
          <option value="2">Pago</option>
        </select>
    </div>

    <div class="col-12 mt-3 mb-5">
      <button type="submit" class="btn btn-primary">Reservar</button>
    </div>

  </form>
</section>

@endsection