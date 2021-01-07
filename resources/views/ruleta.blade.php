@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
@endsection

@section("content")
    @foreach ($senoras as $senora)
        @php
        $fotoSenoras[$senora->id] = $senora
       @endphp
    @endforeach
    @php
    @endphp
    <h2>Escogiendo mujer aleatoriamente</h2>
    <img id="fotoRuleta" class="rounded mx-auto d-block border border-dark " width="500px" height="500px"src=""> 
    <script> 
        var pepe = new Array();
        pepe = <?php echo(json_encode($fotoSenoras))?>;
    </script>
    
    <script src="../../../resources\js\ruletaMujeres.js" type='text/javascript'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
                             