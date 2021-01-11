<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'pregunta',
        'mujer'
    ];
    public function mujer(){
        return $this->belongsTo(Mujer::class);
    }
    public static function getPreguntasAleatorias(){
        $array=self::all();
        $count=count($array);
        if($count>=10){
            $count=10;
        }
        return $array->random($count);
    }

    public static function getPreguntasAleatoriasPorEspecialidad($especialidad){
        $array=self::with(array("mujer"=>function($query) use ($especialidad) {
            $query->where("mujeres.especialidad",$especialidad);
            $query->get();
        }))->get();
        $count=count($array);
        if($count>=10){
            $count=10;
        }
        return $array->random(($count));
    }
}
