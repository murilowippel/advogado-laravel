@extends('layouts.app')

@section('content')
<div class="col-md-12">
  <h3>Edição de Cliente</h3>
</div>

<div class="col-md-6 well">
  <form class="col-md-12" action="{{ url('/clientes/atualizar') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $cliente->id }}" />
    <div class="from-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
      <label class="control-label">Nome</label>
      <input name="nome" value="{{ $cliente->nome }}" class="form-control" placeholder="Nome">
      @if($errors->has('nome'))
      <span class="help-block">
        {{ $errors->first('nome') }}
      </span>
      @endif
    </div>
    <div class="from-group col-md-4 {{ $errors->has('cpf') ? 'has-error' : '' }}">
      <label class="control-label">CPF</label>
      <input name="cpf" value="{{ $cliente->cpf }}" class="form-control" placeholder="DDD">
      @if($errors->has('cpf'))
      <span class="help-block">
        {{ $errors->first('cpf') }}
      </span>
      @endif
    </div>
    <div class="from-group col-md-8 {{ $errors->has('telefone') ? 'has-error' : '' }}">
      <label class="control-label">Telefone</label>
      <input name="telefone" value="{{ $cliente->telefone }}" class="form-control" placeholder="Telefone">
      @if($errors->has('telefone'))
      <span class="help-block">
        {{ $errors->first('telefone') }}
      </span>
      @endif
    </div>
    <div class="from-group col-md-8 {{ $errors->has('email') ? 'has-error' : '' }}">
      <label class="control-label">E-mail</label>
      <input name="email" value="{{ $cliente->email }}" class="form-control" placeholder="E-mail">
      @if($errors->has('email'))
      <span class="help-block">
        {{ $errors->first('email') }}
      </span>
      @endif
    </div>
    <div class="col-md-12">
      <button style="margin-top: 5px; float: right" class="btn btn-primary">Gravar</button>
    </div>
  </form>
</div>
@endsection