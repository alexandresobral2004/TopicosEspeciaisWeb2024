@extends('layouts.main')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    @if($clientes->isNotEmpty())
    @foreach($clientes as $cliente)
    <tr>
      <td>{{$cliente->id}}</td>
      <td>{{$cliente->nome}}</td>
      <td>{{$cliente->telefone}}</td>
      <td>{{$cliente->email}}</td>
    </tr>

    @endforeach
    @endif
  </tbody>
</table>

@endsection
