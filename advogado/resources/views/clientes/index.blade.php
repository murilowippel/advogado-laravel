@extends('layouts.app')

@section('content')
<style>
  .bt-acao{
    margin-left: 15px;
  }
</style>
<table class="table"> 
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
      <td><a href="{{ url("/clientes/$cliente->id/editar") }}" class="btn btn-primary bt-acao"><i class="fas fa-pencil-alt"></i></a>
        <a href="{{ url("/clientes/$cliente->id/excluir") }}" class="btn btn-danger bt-acao"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection