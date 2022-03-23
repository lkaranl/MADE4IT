<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lmc extends Model
{
    use HasFactory;
    protected $table = "lmc";

    protected $fillable = [
        'identificador', 
        'spid',
        'nome',
        'ce_identify',
        'faixa_gerencia',
        'lmce',
        'vlan_gerencia',
        'interface',
        'ativo_id',
        'cidade_id'
    ];
}
