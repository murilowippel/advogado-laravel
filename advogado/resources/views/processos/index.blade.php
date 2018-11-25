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
      <th style="text-align: center;" scope="col">Código</th>
      <th scope="col">Título</th>
      <th scope="col">Data de Criação</th>
      <th scope="col">Valor Cobrado</th>
      <th scope="col">Categoria de Processo</th>
      <th scope="col">Cliente</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($processos as $processo)
    <tr>
      <td style="text-align: center;">{{$processo->id}}</td>
      <td>{{$processo->titulo}}</td>
      <td>{{$processo->datacriacao}}</td>
      <td>{{number_format($processo->valorcobrado, 2, ",", ".")}}</td>
      <?php
        foreach($tipoprocessos as $tipoprocesso){
          if($tipoprocesso->id == $processo->idtipoprocesso){ ?>
            <td>{{$tipoprocesso->nome}}</td>
          <?php }
        }
      ?>
      <?php
        foreach($clientes as $cliente){
          if($cliente->id == $processo->idcliente){ ?>
            <td>{{$cliente->nome}}</td>
          <?php }
        }
      ?>
      <td><a href="{{ url("/processos/$processo->id/editar") }}" class="btn btn-primary bt-acao"><i class="fas fa-pencil-alt"></i></a>
        <a href="{{ url("/processos/$processo->id/excluir") }}" class="btn btn-danger bt-acao"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection