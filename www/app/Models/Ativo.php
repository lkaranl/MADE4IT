<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    use HasFactory;
    protected $table = "ativo";

    protected $fillable = [
        'descricao',
        'ip_legado',
        'ip',
        'terminacao',
        'nome',
        'ativo',
        'observacao',
        'funcao_id',
        'equipamento_id',
        'site_id',
        'coordenadas'
    ];
}
