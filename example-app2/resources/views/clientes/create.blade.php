@extends('layouts.main')

@section('content')


<form action="{{route('clientes.store')}}" method="POST">
  @csrf
  <h2>Novo Cliente</h2>
  <div class="row col-8 d-flex flex-column">
    <div class="col-5">
      <input type="hidden" name="id" value="{{$cliente->id ?? ''}}">
      <label for="nome" class="form-label">Nome:</label>
      <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="col-3">
      <label for="telefone" class="form-label">Fone:</label>
      <input type="text" class="form-control" name="telefone" id="telefone">
    </div>
    <div class="col-5">
      <label for="email" class="form-label">E-mail:</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>

    <div class="mb-3 col-3">
      <label for="cpf" class="form-label">CPF:</label>
      <input type="text" class="form-control" name="cpf" id="cpf">
    </div>
    <hr>
    <h2>Endereço</h2>
    <div class="col-6">
      <label for="logradouro" class="form-label">Rua:</label>
      <input type="text" class="form-control" name="logradouro" id="logradouro">
    </div>
    <div class="col-3">
      <label for="bairro" class="form-label">Bairro:</label>
      <input type="text" class="form-control" name="bairro" id="bairro">
    </div>
    <div class="col-4">
      <label for="cidade" class="form-label">Cidade:</label>
      <input type="text" class="form-control" name="cidade" id="cidade">
    </div>
    <div class="col-2">
      <label for="estado" class="form-label">Estado:</label>
      <input type="text" class="form-control" name="estado" id="estado">
    </div>
    <div class="col-3">
      <label for="cep" class="form-label">CEP:</label>
      <input type="text" class="form-control" name="cep" id="cep">
    </div>

  </div>

  <button type="submit" class="mt-4 btn btn-primary">Salvar</button>
</form>
@endsection
