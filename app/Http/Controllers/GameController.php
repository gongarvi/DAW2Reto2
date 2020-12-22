<?php

namespace App\Http\Controllers;

use App\View\Components\GameCard;
use Illuminate\Support\Facades\Blade;

class GameController extends Controller
{
    private array $juegos;
    public function __construct(){
        //TODO Eliminar cuando se recoja de la BBDD
        $this->juegos = array(
            array(
                "nombre"=>"matching",
                "descripcion"=>"Debes unir las mujeres con su profesión o su logro",
                "imagen"=>""
            ),
            array(
                "nombre"=>"buscaminas",
                "descripcion"=>"Debes unir las mujeres con su profesión o su logro",
                "imagen"=>""
            ),
            array(
                "nombre"=>"millonario",
                "descripcion"=>"Debes unir las mujeres con su profesión o su logro",
                "imagen"=>""
            )
        );
    }
    public function show(){
        Blade::component('game-card', GameCard::class);
        return view("game", ["juegos"=>$this->juegos]);
    }
}
