<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mujer extends Model
{
    use HasFactory;
    protected $table = 'mujeres';
    protected $fillable = [
        'id',
        'nombre',
        'password',
    ];
}
