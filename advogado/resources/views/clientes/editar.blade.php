@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="col-md-12">
  <br>
  <h3>Edição de Cliente</h3>
</div>

<div class="col-md-6 well">
  <form class="col-md-12" action="{{ url('/clientes/atualizar') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $cliente->id }}" />
    <div class="from-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Nome</label>
      <input name="nome" value="{{ $cliente->nome }}" class="form-control" placeholder="Nome">
      @if($errors->has('nome'))
      <span class="help-block">
        {{ $errors->first('nome') }}
      </span>
      @endif
    </div>
    <div class="from-group col-md-6 {{ $errors->has('cpf') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">CPF</label>
      <input name="cpf" id="cpf" value="{{ $cliente->cpf }}" class="form-control" placeholder="CPF">
      @if($errors->has('cpf'))
      <span class="help-block">
        {{ $errors->first('cpf') }}
      </span>
      @endif
    </div>
    <div class="from-group col-md-6 {{ $errors->has('telefone') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Telefone</label>
      <input name="telefone" id="telefone" value="{{ $cliente->telefone }}" class="form-control" placeholder="Telefone">
      @if($errors->has('telefone'))
      <span class="help-block">
        {{ $errors->first('telefone') }}
      </span>
      @endif
    </div>
    <div class="from-group col-md-12 {{ $errors->has('email') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">E-mail</label>
      <input name="email" value="{{ $cliente->email }}" class="form-control" placeholder="E-mail">
      @if($errors->has('email'))
      <span class="help-block">
        {{ $errors->first('email') }}
      </span>
      @endif
    </div>
    
    <br>
    
    <div class="col-md-12">
      <button style="margin-top: 5px; float: right" class="btn btn-primary">Gravar</button>
    </div>
  </form>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#telefone').mask('(00) 0000-0000');
  });
</script>
@endsection