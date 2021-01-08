@extends("layouts.page")

@section("head-extras")
   
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="{{asset("css/matching.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
    @endsection

@section("content")

<h1>DESAYUNOS FEMINISTAS </h1>
<h2>Juego del Matching</h2>


    <div class="puntos">
        <img src="..\image/logo.png" height="30">
        <img src="..\image\logo.png" height="30">
        <img src="..\image\logo.png" height="30">
        <img src="..\image\logo.png" height="30">
                    
    </div>
    <div class="contenedor">
                
    </div>
    <div id="contenedor-mensaje-victoria" class="ocultar-mensaje">
        <div id="mensaje-victoria">
            <h3>Felicidades!!!</h3>
            <h4>Has completado el nivel</h4>
            <img src="..\image\felicitar.gif">
            <a href="#">Seguir Jugando</a>
        </div>   
    </div>

    <div id="contenedor-mensaje-derrota" class="ocultar-mensaje">
        <div id="mensaje-derrota">
            <h3>Lo sentimos!!!</h3>
            <h4>No has podido completar el nivel, pero Ánimo</h4>
            <button class="btn">Otra partida</button>
        </div>   
    </div>

@endsection
<script>
    var mujercitas;
    mujercitas = <?php echo(json_encode($mujeres))?>
</script>
<script src="{{ asset('js/match.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>

