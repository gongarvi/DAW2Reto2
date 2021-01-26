@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/tresenrayas.css")}}">
@endsection

@section("content")
        <div class="mt-2">
            <div class="buttons text-center">
                <span id="symbol-X" class="symbol"> X </span>
                <span id="symbol-O" class="symbol"> O </span>
            </div>
            <div id="gameboard" class="container">
                <div id="row1" class="row">
                    <div class="left-square square col-xs-4" id="sq0"></div>
                    <div class="middle-square square col-xs-4" id="sq1"></div>
                    <div class="right-square square col-xs-4" id="sq2"></div>
                </div>
                <div id="row2" class="row">
                    <div class="left-square square col-xs-4" id="sq3"></div>
                    <div class="middle-square square col-xs-4" id="sq4"></div>
                    <div class="right-square square col-xs-4" id="sq5"></div>
                </div>
                <div id="row3" class="row">
                    <div class="left-square square col-xs-4" id="sq6"></div>
                    <div class="middle-square square col-xs-4" id="sq7"></div>
                    <div class="right-square square col-xs-4" id="sq8"></div>
                </div>
            </div>
        </div>


        <!-- Contenedores de mensajes -->
        <div id="contenedor-mensaje" class="ocultar-mensaje">
            <div id="mensaje">
                <h3 id="titulo-mensaje"></h3>
                <button class="btn btn-light btnCerrarMensaje">OK</button>
            </div>   
        </div>
        <div id="contenedor-mensaje-victoria" class="ocultar-mensaje">
            <div id="mensaje-victoria">
                <h3>Felicidades!!!</h3>
                <h4>Has completado el nivel</h4>
                <img src="img/felicitar.gif">
                <button class="btn btn-light btnCerrarMensaje">Otra partida</button>
                <button class="btn btn-light" id="SalirJuego">Salir</button>
            </div>   
        </div>
        <div id="contenedor-mensaje-derrota" class="ocultar-mensaje">
            <div id="mensaje-derrota">
                <h3>Has perdido!!!</h3>
                <h4>No has podido completar el nivel, pero Ánimo</h4>
                <button class="btn btn-light btnCerrarMensaje">Otra partida</button>
            </div>   
        </div>
        

    <script src="{{asset("js/tresenrayas.js")}}"></script>

    

@endsection
