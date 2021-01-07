<?php

namespace App\Models;

<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Preguntas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
>>>>>>> 93f96a639b110aba0b69d55f1036725326d168dd
}
