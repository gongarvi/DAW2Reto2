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
                "descripcion"=>"En este juego deberas unir las mujeres con su profesión o su logro",
                "imagen"=>"resources/assets/Fotos_Juegos/matching.png"
            ),
            array(
                "nombre"=>"puzzle",
                "descripcion"=>"En este juego deberas unir las distintas piezas que juntas mostraran a una mujer",
                "imagen"=>"resources/assets/Fotos_Juegos/puzzle.png"
            ),
            array(
                "nombre"=>"buscaminas",
                "descripcion"=>"En este juego deberas evitar las bombas para descubrir el rosotro de una mujer",
                "imagen"=>"resources/assets/Fotos_Juegos/buscaminas.png"
            ),
            array(
                "nombre"=>"Quien quiere ser millonaria?",
                "descripcion"=>"En este juego deberas responder las preguntas de las distintas mujeres.",
                "imagen"=>"resources/assets/Fotos_Juegos/quiz.png"
            ),
            array(
                "nombre"=>"3 en raya",
                "descripcion"=>"En este juego deberas ganar una partida de 3 en raya contra una inteligente maquina",
                "imagen"=>"resources/assets/Fotos_Juegos/images.png"
            )
        );
    }
    public function show(){
        Blade::component('game-card', GameCard::class);
        return view("game", ["juegos"=>$this->juegos]);
    }
}
