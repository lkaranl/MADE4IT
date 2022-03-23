<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Svc extends Model
{
    use HasFactory;

    protected $table = "svc";

    protected $fillable = [
        'identificador',
        'svct',
        'banda',
        'informacoes',
        'gsvcid',
        'in_vlan',
        'out_vlan',
        'peering_mrouter',
        'peering_cliente1',
        'peering_cliente2',
        'distinguisher',
        'cliente_id'
    ];
}
