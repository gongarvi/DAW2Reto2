@extends("layouts.page")
<link rel="stylesheet" href="../css/iconos/style.css">
<link rel="stylesheet" href="{{asset("css/matching.css")}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@section("head-extras")
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}"> -->
    
@endsection

@section("content")
   
    <div id="game-cards-controller" class="container" >
        
        <h1>JUEGO DEL MATCHING</h1>

        <div class="row">
            <div class="col">
                
                <div class="carosel">
                    <h3>Documentarse</h3>
                    <img src="..\image\caballo.jpg" height="200px" id="idFoto">
                    <p id="descripcion"></p>
                    <div class="botones">
                        <button id="anterior" ><span class="icon-controller-jump-to-start"></span></button> 
                        <button id="inicio" ><span class="icon-controller-play"></span></button>   
                        <button id="siguiente" ><span class="icon-controller-next"></span></button>  
                    </div>
                </div>
            </div>
        </div>
        <div class="principal">
        <h3>Jugar</h3>
            <div class="puntos">
                <img src="..\image\corazon.jpg" height="30">
                <img src="..\image\corazon.jpg" height="30">
                <img src="..\image\corazon.jpg" height="30">
                <img src="..\image\corazon.jpg" height="30">
            </div>   
            <div class="contenedor">

            </div>  
            <div class="ocultar-mensaje" id="victoria">
                <div id="mensaje-victoria">
                    <h3>Felicidades!!!</h3>
                    <h4>Has completado el nivel</h4>
                    <img src="..\image\felicitar.gif" height="100">
                    <a href="#">Seguir Jugando</a>
                </div>  
            </div>  
            <div class="ocultar-mensaje" id="derrota">
                <div id="mensaje-derrota">
                    <h3>Lo sentimos!!!</h3>
                    <h4>No has podido completar el nivel, pero Ánimo</h4>
                    <button class="btn">Otra partida</button>
                </div>  
            </div>
        </div>
    </div>
    <script src="{{asset("js/game-card-controller.js")}}"></script>
    <script src="../js/matching.js"></script>
    @endsection
