<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subinterface extends Model
{
    use HasFactory;
    protected $table = "subinterface";

    protected $fillable = [
        'nome', 
        'lmx_id', 
    ];
}
