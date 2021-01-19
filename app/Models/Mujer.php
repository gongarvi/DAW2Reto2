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
    public function especialidades(){
        return $this->belongsTo(Especialidad::class,"especialidad","id");
    }
}
