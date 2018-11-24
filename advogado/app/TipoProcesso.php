<?php

namespace advogado;

use Illuminate\Database\Eloquent\Model;

class TipoProcesso extends Model {

  protected $fillable = [
      'id',
      'nome'
  ];
  protected $table = 'tipoprocesso';

}
