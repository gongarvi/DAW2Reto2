@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">

@endsection

@section("content")
    <!--Aqui vendran las categorias que se podran jugar-->
        <h2>Seleccione una tematica para jugarla, en caso de seleccionar Todas jugara con todas las categorias</h2>
        <select id="selectEspecialidad" class="d-flex justify-content-center" name="combo">
            <option value="0">Todos</option>
            @foreach($especialidades as $especialidad)
                <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>
            @endforeach

        </select>
    <div  id="game-cards-controller" class="container" >
        <ul class="row" >
            @foreach($juegos as $jueg=>$juego)
                <li class="list-group-item bg-transparent border-0 col-xs-12 col-sm-4">
                    <x-gamecard :juego="$juego"></x-gamecard>
                </li>
            @endforeach
        </ul>

    </div>
@endsection

