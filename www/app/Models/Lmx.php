<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lmx extends Model
{
    use HasFactory;
    protected $table = "lmx";

    protected $fillable = [
        'nome', 
    ];
}
