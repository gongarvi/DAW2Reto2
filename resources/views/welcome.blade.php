@extends("layouts.clear")

@section("head-extras")

    <link rel="stylesheet" href="{{asset("css/index.css")}}">

@endsection
@section("header")
    <img src="image/feminina.png" alt="feminina">
    <p id="logo">Desayunos feministas</p>
@endsection
@section("content")
   
    <div class="container container-fluid">
        <div class="row m-auto">
            <div class="col-12 col-lg-4 p-0 text-center">
                <img class="m-auto" src="{{asset("image/feminina.png")}}" alt="feminina">
                <h1 class="m-auto text-center" id="logo">Desayunos feministas</h1>

            </div>
            <div class="col-12 col-lg-8 p-0 mt-5 m-lg-auto">
                <ul class="list-group-flush p-0 my-auto">
                    <li class="list-group-item border-0 bg-transparent"><a class="btn btn-outline-light w-100" href="{{route("login")}}">Iniciar sesión / Registrarse</a></li>
                    <li class="list-group-item border-0 bg-transparent"><a class="btn btn-outline-light w-100" href="{{route("mujeres")}}">Mujeres</a></li>
                    <li class="list-group-item border-0 bg-transparent"><a class="btn btn-outline-light w-100" href="{{route("juegos")}}">Juego</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-justify">
                <p>Usted usuario, queremos darte la bienvenida a nuestro sitio web, suponiendo que es la primera vez que entras aquí y no sabes de qué trata la web y quiénes somos, no te preocupes en seguida te lo aclaramos.</p>
                <p>Cabe destacar de inicio que somos una asociación feminista (Desayunos Feministas) ubicada en Santander, una de nuestras misiones es recopilar información sobre las mujeres que han trabajado en varios ámbitos y han destacado por sus ideologías, carácter…y que a nivel social son poco conocidas.</p>
                <p>Y a raíz de esto hemos creado este sitio web para dar visibilidad a esas mujeres, la web incluye una variedad juegos con la información de las damas.</p>
                <p>Que lo disfrutes</p>
            </div>
        </div>
    </div>
@endsection
