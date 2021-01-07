<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    use HasFactory;
    protected $table = "mujeres";
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'nacimiento',
        'fallecido',
        'nacionalidad',
        'especialidad',
        'foto',
        'descripcion'
    ];
}
