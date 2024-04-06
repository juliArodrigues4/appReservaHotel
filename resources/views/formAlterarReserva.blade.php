@extends('layout')
@section('content')

<section class="container mt-5"> 
    <h1>Reserva de Quartos</h1>
  <form class="row g-3" method="Post" action="{{route('alterar-reserva', $registrosReservas->id)}}">
    @method('put')
    @csrf
    <div class="col-md-3">
      <label for="inputIdFuncionario" class="form-label">Digite o código do funcionário:</label>
      <input type="text" class="form-control" id="inputIdFuncionario" name="idFuncionario" value="{{old('idFuncionario', $registrosReserva->idFuncionario)}}">
      @error('idFuncionario')
      <div class="text-sm-start text-light">*Preencher o campo id do funcionário</div>
      @enderror
    </div>

    <div class="col-md-8">
      <label for="inputNomeFuncionario" class="form-label">Nome do funcionário:</label>
      <input type="text" class="form-control" id="inputNomeFuncionario" name="nomeFuncionario" value="{{old('nomeFuncionario', $registrosReserva->nomeFuncionario)}}">
      @error('nomeFuncionario')
      <div class="text-sm-start text-light">*Preencher o campo nome do funcionario</div>
      @enderror
    </div>

    <div class="col-md-3">
      <label for="inputIdFuncionario" class="form-label">Digite o código do cliente:</label>
      <input type="text" class="form-control" id="inputIdFuncionario" name="idCliente" value="{{old('idCliente', $registrosReserva->idCliente)}}">
      @error('idCliente')
      <div class="text-sm-start text-light">*Preencher o campo id do cliente</div>
      @enderror
    </div>

    <div class="col-md-8">
      <label for="inputNomeCliente" class="form-label">Nome do cliente:</label>
      <input type="text" class="form-control" id="inputNomeCliente" name="nomeCliente" value="{{old('nomeCliente', $registrosReserva->nomeCliente)}}">
      @error('nomeCliente')
      <div class="text-sm-start text-light">*Preencher o campo nome do cliente</div>
      @enderror
    </div>

    <div class="col-md-3">
      <label for="inputIdQuarto" class="form-label">Digite o número do quarto:</label>
      <input type="text" class="form-control" id="inputIdQuarto" name="numeroQuarto" value="{{old('numeroQuarto', $registrosReserva->numeroQuarto)}}">
      @error('numeroQuarto')
      <div class="text-sm-start text-light">*Preencher o campo número do quarto</div>
      @enderror
    </div>

    <div class="col-md-8">
      <label for="inputValorDiaria" class="form-label">Tipo:</label>
      <input type="text" class="form-control" id="inputTipoQuarto" readonly name="tipoQuarto" value="{{old('tipoQuarto', $registrosReserva->tipoQuarto)}}">
      @error('tipoQuarto')
      <div class="text-sm-start text-light">*Preencher o campo tipo do quarto</div>
      @enderror
    </div>

    <div class="col-md-4">
      <label for="inputValorDiaria" class="form-label">Valor da diária:</label>
      <input type="text" class="form-control" id="inputValorDiaria" readonly name="valorDiaria" value="{{old('valorDiaria', $registrosReserva->valorDiaria)}}">
      @error('valorDiaria')
      <div class="text-sm-start text-light">*Preencher o campo valor da diária</div>
      @enderror
    </div>

    <div class="col-md-4">
      <label for="inputDataSaida" class="form-label">Data de entrada:</label>
      <input type="date" class="form-control" id="inputDataSaida" name="dataEntrada" value="{{old('dataEntrada', $registrosReserva->dataEntrada)}}">
      @error('dataEntrada')
      <div class="text-sm-start text-light">*Preencher o campo data de entrada</div>
      @enderror
    </div>

    <div class="col-md-3">
      <label for="inputDataSaida" class="form-label">Data de saída:</label>
      <input type="date" class="form-control" id="inputDataSaida" name="dataSaida" value="{{old('dataSaida', $registrosReserva->dataSaida)}}">
      @error('dataSaida')
      <div class="text-sm-start text-light">*Preencher o campo data de saída</div>
      @enderror
    </div>

    <div class="col-md-5">
      <label for="inputValorTotal" class="form-label">Valor total:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">R$</span>
              <input type="text" class="form-control" name="valorTotal" aria-label="Dollar amount (with dot and two decimal places)" value="{{old('valorTotal', $registrosReserva->valorTotal)}}">
              @error('valorTotal')
              <div class="text-sm-start text-light">*Preencher o campo valor total</div>
              @enderror
            <span class="input-group-text">0.00</span>
        </div>
    </div>

    <div class="col-md-8">
    <label for="inputSituacao" class="form-label">Situação do pagamento:</label>
        <select class="form-select" name="situacao" aria-label="Default select example">
          <option value="{{old('pendente', $registrosReserva->pendente)}}">>Pendente</option>
          <option value="{{old('pago', $registrosReserva->pago)}}">>Pago</option>
        </select>
        @error('situacao')
        <div class="text-sm-start text-light">*Preencher o campo da situação</div>
        @enderror
    </div>

    <div class="col-12 mt-3 mb-5">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

  </form>
</section>

@endsection