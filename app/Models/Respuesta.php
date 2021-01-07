<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'pregunta',
        'respuesta',
        'correcta',
    ];
    public function toJsonArray(): array
    {
        return ["respueta"=>$this->respuesta,"correcta"=>$this->correcta];
    }
}
