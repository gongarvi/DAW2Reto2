@extends("layouts.page")

@section("head-extras")
    <style>
        body{
            background-image: url("../image/fondo3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        #fotosperfil{
            height: 200px;
        }
            
    </style>
@endsection

@section("content") 
@foreach($mujeres as $mujer)

        <a href="/actualizarfoto/{{$idperfil}}/{{$mujer->foto}}"><img src="/assets/Fotos_mujeres/{{$mujer->foto}}" alt="La foto" id="fotosperfil"></a>

           
    @endforeach
@endsection

