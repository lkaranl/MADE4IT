<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadeUltimaMilha extends Model
{
    use HasFactory;
    protected $table = "cidade_has_ultima_milha";

    protected $fillable = [
        'cidade_id',
        'ultima_milha_id'
    ];
}
