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

    public static function getPreguntaAleatoriaMujer($id_mujer){
        $array=self::with(array("mujer"=>function($query) use ($id_mujer) {
            $query->where("mujeres.id",$id_mujer);
            $query->get();
        }))->get();
        if(count($array)<=0){
            return null;
        }
        return $array->random(1)->first();
    }
}
