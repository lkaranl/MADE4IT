<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UltimaMilha extends Model
{
    use HasFactory;

    protected $table = "ultima_milha";

    protected $fillable = [
        'fantasia',
        'razao_social',
        'cnpj',
        'telefone',
        'cep',
        'endereco',
        'email'
    ];
}
