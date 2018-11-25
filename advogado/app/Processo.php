<?php

namespace advogado;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model {

  protected $fillable = [
      'id',
      'titulo',
      'datacriacao',
      'valorcobrado',
      'idtipoprocesso',
      'idcliente'
  ];
  protected $table = 'processo';
  
  public function cliente(){
    return $this->belongsTo(Cliente::class, "idcliente");
  }
  
  public function tiporocesso(){
    return $this->belongsTo(TipoProcesso::class, "idtipoprocesso");
  }

}
