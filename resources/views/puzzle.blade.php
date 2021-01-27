@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/juegoPuzzle.css') }}">
    
@endsection

@section("content")   
<div id='content'>
        
    </div>
<script>
    var mujer = JSON.parse(localStorage.getItem("mujeres"));
    alert(mujer[0].foto);
    var cambioImagen;
    cambioImagen = setInterval('cambiarFoto()',100);
    function cambiarFoto(){
        var imagenUrl = "/assets/Fotos_mujeres/"+mujer[0].foto;
        document.getElementsByClassName('pieza')[0].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[1].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[2].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[3].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[4].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[5].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[6].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[7].style.backgroundImage = "url("+imagenUrl+")";
        document.getElementsByClassName('pieza')[8].style.backgroundImage = "url("+imagenUrl+")";
        clearInterval(cambioImagen);
    }
</script>
<script src="{{ URL::asset('js/jsPuzzle.js' )}}"></script>   
@endsection

