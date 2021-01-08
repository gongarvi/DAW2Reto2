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
        $array=self::all();
        $count=count($array);
        if($count>=10){
            $count=10;
        }
        return $array->random($count);
    }

    public static function getPreguntasAleatoriasPorEspecialidad($especialidad){
        $array=self::with("Mujer")->where("especialidad","==",$especialidad)->get("id,pregunta");
        $count=count($array);
        if($count>=10){
            $count=10;
        }
        return $array->random(($count));
    }
}
