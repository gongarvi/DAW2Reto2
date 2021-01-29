@extends("layouts.page")

@section("head-extras")
<link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">

@endsection

@section("content")
<div id="app">
    <!--Aqui vendran las categorias que se podran jugar-->
    <div class=" p-2">
        <h4>Seleccione una tematica para jugarla, en caso de seleccionar Todas jugara con todas las categorias</h4>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <select class="form-control" id="selectEspecialidad" name="combo">
                        <option value="0">Todos</option>
                        @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}" style="background-color:'{{$especialidad->color}}';">{{$especialidad->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div id="game-cards-controller" class="container">
        <ul class="row">
            @foreach($juegos as $jueg=>$juego)
            <li class="list-group-item bg-transparent border-0 col-xs-12 col-sm-4">
                <x-gamecard :juego="$juego"></x-gamecard>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<script src="{{"js/game-page.js"}}" defer></script>
@endsection
