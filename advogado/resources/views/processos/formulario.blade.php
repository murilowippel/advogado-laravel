@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="col-md-12">
  <br>
  <h3>Cadastro de Processos</h3>
</div>

<div class="col-md-6 well">
  <form class="col-md-12" action="{{ url('/processos/gravar') }}" method="POST">
    {{ csrf_field() }}
    <div class="from-group col-md-12 {{ $errors->has('titulo') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Título</label>
      <input name="titulo" value="{{ old('titulo') }}" class="form-control" placeholder="Título">
      @if($errors->has('titulo'))
      <span class="help-block">
        {{ $errors->first('titulo') }}
      </span>
      @endif
    </div>

    <div class="from-group col-md-4 {{ $errors->has('datacriacao') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Data de Criação</label>
      <input name="datacriacao" id="datacriacao" value="{{ old('datacriacao') }}" class="form-control" placeholder="Data de Criação">
      @if($errors->has('datacriacao'))
      <span class="help-block">
        {{ $errors->first('datacriacao') }}
      </span>
      @endif
    </div>

    <div class="from-group col-md-4 {{ $errors->has('valorcobrado') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Valor Cobrado</label>
      <input name="valorcobrado" id="valorcobrado" value="{{ old('valorcobrado') }}" class="form-control" placeholder="Valor Cobrado">
      @if($errors->has('valorcobrado'))
      <span class="help-block">
        {{ $errors->first('valorcobrado') }}
      </span>
      @endif
    </div>

    <!--CATEGORIAS DE PROCESSOS-->
    <div class="from-group col-md-12 {{ $errors->has('idtipoprocesso') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Categoria de Processo</label>
      <select name="idtipoprocesso" class="custom-select">
        <option value="" disabled selected>Escolha uma opção</option>
        @foreach($tipoprocessos as $tipoprocesso)
          <option value="{{$tipoprocesso->id}}">{{$tipoprocesso->nome}}</option>
        @endforeach
      </select>
    </div>
    
    <!--CLIENTE-->
    <div class="from-group col-md-12 {{ $errors->has('idcliente') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Cliente</label>
      <select name="idcliente" class="custom-select">
        <option value="" disabled selected>Escolha uma opção</option>
        @foreach($clientes as $cliente)
          <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
        @endforeach
      </select>
    </div>
    
    <br>
    
    <div class="col-md-12">
      <button style="margin-top: 5px; float: right" class="btn btn-primary">Gravar</button>
    </div>
  </form>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    $('#datacriacao').mask('00/00/0000');
    $('#valorcobrado').mask('000.000.000.000.000,00', {reverse: true});
  });
</script>
@endsection