<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
  use HasFactory;
  protected $table = "site";

  protected $fillable = [
      'nome',
      'sigla',
      'faixa_administrativa',
      'estado_id',
      'cidade_id',
      'coordenadas'
  ];
}
