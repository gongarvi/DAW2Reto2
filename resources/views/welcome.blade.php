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
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
            </div>
        </div>
    </div>
@endsection
