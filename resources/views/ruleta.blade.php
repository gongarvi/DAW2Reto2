@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
@endsection

@section("content")
    @foreach ($senoras as $senora)
        @php
        $fotoSenoras[$senora->id] = $senora
       @endphp
    @endforeach
    <Ruleta/>
    <!-- <h2>Escogiendo mujer aleatoriamente</h2>
    <img id="fotoRuleta" class="rounded mx-auto d-block border border-dark " width="500px" height="500px"src=""> -->
    <script>
        var especialidad = <?php echo $especialidad?>;
        var Mujer = new Array();
        Mujer = <?php echo(json_encode($fotoSenoras))?>;
        var juego= <?php echo(json_encode($juego))?>;
    </script>
@endsection