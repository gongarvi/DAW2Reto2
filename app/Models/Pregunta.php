<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pregunta extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'id',
        'pregunta',
        'mujer'
    ];

    public static function getPreguntasAleatorias(){
        return self::all()->random(10);return self::all()->random(10);
    }

    public static function getPreguntasAleatoriasPorEspecialidad($especialidad){
        return self::with("Mujer")->where("especialidad","==",$especialidad)->get("id,pregunta");
    }
}
