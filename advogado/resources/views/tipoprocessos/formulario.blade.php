@extends('layouts.app')

@section('content')
<div class="col-md-12">
  <br>
  <h3>Cadastro de Categorias de Processos</h3>
</div>

<div class="col-md-6 well">
  <form class="col-md-12" action="{{ url('/tipoprocessos/gravar') }}" method="POST">
    {{ csrf_field() }}
    <div class="from-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
      <br>
      <label class="control-label">Nome</label>
      <input name="nome" value="{{ old('nome') }}" class="form-control" placeholder="Nome">
      @if($errors->has('nome'))
      <span class="help-block">
        {{ $errors->first('nome') }}
      </span>
      @endif
    </div>
    
    <br>
    
    <div class="col-md-12">
      <button style="margin-top: 5px; float: right" class="btn btn-primary">Gravar</button>
    </div>
  </form>
</div>
@endsection