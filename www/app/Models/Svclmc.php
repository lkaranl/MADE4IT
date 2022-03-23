<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Svclmc extends Model
{
    use HasFactory;

    protected $table = "svc_has_lmc";

    protected $fillable = [
        'svc_id',
        'lmc_id',
        'in_vlan',
        'out_vlan',
        'peering_mrouter',
        'peering_cliente1',
        'peering_cliente2',
        'distinguisher',
        'observacoes'
    ];
}
