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
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($tipoprocessos as $tipoprocesso)
    <tr>
      <td>{{$tipoprocesso->id}}</td>
      <td>{{$tipoprocesso->nome}}</td>
      <td><a href="{{ url("/tipoprocessos/$tipoprocesso->id/editar") }}" class="btn btn-primary bt-acao"><i class="fas fa-pencil-alt"></i></a>
        <a href="{{ url("/tipoprocessos/$tipoprocesso->id/excluir") }}" class="btn btn-danger bt-acao"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection