<?php

namespace App\Http\Controllers;

use App\View\Components\GameCard;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    private array $juegos;
    private array $especialidades;
    
    public function __construct(){
        //TODO Eliminar cuando se recoja de la BBDD
        $this->juegos = array(
            array(
                "id"=>"1",
                "nombre"=>"matching",
                "descripcion"=>"En este juego deberas unir las mujeres con su profesión o su logro",
                "imagen"=>"assets/Fotos_Juegos/matching.png"
            ),
            array(
                "id"=>"2",
                "nombre"=>"puzzle",
                "descripcion"=>"En este juego deberas unir las distintas piezas que juntas mostraran a una mujer",
                "imagen"=>"assets/Fotos_Juegos/puzzle.png"
            ),
            array(
                "id"=>"3",
                "nombre"=>"buscaminas",
                "descripcion"=>"En este juego deberas evitar las bombas para descubrir el rosotro de una mujer",
                "imagen"=>"assets/Fotos_Juegos/buscaminas.png"
            ),
            array(
                "id"=>"4",
                "nombre"=>"Quien quiere ser millonaria?",
                "descripcion"=>"En este juego deberas responder las preguntas de las distintas mujeres.",
                "imagen"=>"assets/Fotos_Juegos/quiz.png"
            ),
            array(
                "id"=>"Final",
                "nombre"=>"3 en raya",
                "descripcion"=>"En este juego deberas ganar una partida de 3 en raya contra una inteligente maquina",
                "imagen"=>"assets/Fotos_Juegos/images.png"
            ),
            array(
                "id"=>"Extra",
                "nombre"=>"3 en raya Diablo",
                "descripcion"=>"En este juego deberas ganar una partida de 3 en raya contra una inteligente maquina",
                "imagen"=>"assets/Fotos_Juegos/images.png"
            ),
        );

    }

    public function cargarEspecialidades(){
        $tabla = DB::table('especialidades')->get();
        return $tabla;
    }
    public function cargarMujeresRandom($especialidad){
        if ($especialidad == 10){
            $tablaMujer = DB::table('mujeres')->get();
        }else{
            $tablaMujer = DB::table('mujeres')->limit(3)->select('*')->where('especialidad', '=', $especialidad)->inRandomOrder()->get();
        }

        return $tablaMujer;
    }
    public function show(){
        Blade::component('game-card', GameCard::class);
        return view("game", ["juegos"=>$this->juegos,"especialidades"=>self::cargarEspecialidades()]);
    }
 
    public function ruleta($Especialidad,$juego){
        return view("ruleta", ["senoras"=>self::cargarMujeresRandom($Especialidad),"juego"=>$juego,"especialidad"=>$Especialidad]);
    }
    public function puzzle(){
        return view("puzzle");
    }
}
