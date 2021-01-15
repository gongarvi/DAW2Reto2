@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/juegoPuzzle.css') }}">
    <script src="{{ URL::asset('js/jsPuzzle.js' )}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
@endsection


@section("content")
    <div id='content'>
        
    </div>
    <script>
        $(document).ready(function() {
        var imagenUrl = "{{ URL::asset('assets/Fotos_mujeres/amalia_amaki.jpg') }}";
        document.getElementsByClassName('pieza').style.backgroundImage = "url("+imagenUrl+")";
        });
    </script>
@endsection

