@extends('layouts.app')

@section('content')
<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes as $cliente)
    <tr>
      <td>{{$cliente->nome}}</td>
      <td>{{$cliente->cpf}}</td>
      <td>{{$cliente->telefone}}</td>
      <td>{{$cliente->email}}</td>
      <td><a href="{{ url("/clientes/$cliente->id/editar") }}" class="btn btn-primary">Editar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection