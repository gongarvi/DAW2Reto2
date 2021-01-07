<?php

namespace App\Models;

<<<<<<< HEAD

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    use HasFactory;
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
=======
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
>>>>>>> 93f96a639b110aba0b69d55f1036725326d168dd
    ];
}
