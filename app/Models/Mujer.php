<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidad;
class Mujer extends Model
{
    use HasFactory;
    protected $table = "mujeres";
    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'nacimiento',
        'fallecido',
        'nacionalidad',
        'especialidad',
        'foto',
        'descripcion'
    ];
    public function especialidad(){
        return $this->belongsTo(Especialidad::class,"especialidad","id");
    }

    public static function getMujeresPorEspecializacion($especializacion){
        return self::all()->where("especialidad",$especializacion);
    }
}
