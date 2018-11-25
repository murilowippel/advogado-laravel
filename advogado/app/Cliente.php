<?php

namespace advogado;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
  
  protected $fillable = [
      'id',
      'nome',
      'cpf',
      'telefone',
      'email'
  ];
  protected $table = 'cliente';
  
}
