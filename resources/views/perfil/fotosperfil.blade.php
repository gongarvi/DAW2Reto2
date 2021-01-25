@extends("layouts.page")

@section("head-extras")
   
@endsection

@section("content") 
@foreach($mujeres as $mujer)
            <a href="/actualizarfoto/{{$idperfil}}/{{$mujer->foto}}"><img src="/assets/Fotos_mujeres/{{$mujer->foto}}" alt=""></a>
    @endforeach
@endsection

