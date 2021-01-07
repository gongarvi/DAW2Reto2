<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mujeres extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mujer',
        'nombre',
        'password',
    ];
}
