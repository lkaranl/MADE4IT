<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enlace extends Model
{
    use HasFactory;
    protected $table = "enlace";

    protected $fillable = [
        'mlink',
        'faixa',
        'route_mestre',
        'route_escravo',
        'observacoes',
        'ativo_mestre',
        'ativo_escravo'
    ];
}
