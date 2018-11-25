@extends('layouts.app')

@section('content')
<div class="col-md-12">
  <h3>Edição de Categorias de Processos</h3>
</div>

<div class="col-md-6 well">
  <form class="col-md-12" action="{{ url('/tipoprocessos/atualizar') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $tipoprocesso->id }}" />
    <div class="from-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
      <label class="control-label">Nome</label>
      <input name="nome" value="{{ $tipoprocesso->nome }}" class="form-control" placeholder="Nome">
      @if($errors->has('nome'))
      <span class="help-block">
        {{ $errors->first('nome') }}
      </span>
      @endif
    </div>
    <div class="col-md-12">
      <button style="margin-top: 5px; float: right" class="btn btn-primary">Gravar</button>
    </div>
  </form>
</div>
@endsection