@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
@endsection

@section("content")
    <!--Aqui vendran las categorias que se podran jugar-->
        <h2>Seleccione una tematica para jugarla, en caso de seleccionar Todas jugara con todas las categorias</h2>
        <select id="selectEspecialidad" class="d-flex justify-content-center" name="combo">
            @foreach($especialidades as $especiali=>$especialidad)
                <option value="{{$especialidad->id}}">{{$especialidad->Nombre}}</option>
            @endforeach
        </select>
    <div  id="game-cards-controller" class="container" >
        <ul class="row" >
            @foreach($juegos as $juego)
                <li @click="pulsarcarta()" class="list-group-item bg-transparent border-0 col-xs-12 col-sm-4">
                    <x-gamecard :juego="$juego"></x-gamecard>
                    
                </li>
            @endforeach
        </ul>

    </div>
    <script src="https://unpkg.com/vue@2.1.10/dist/vue.js%22%3E"></script>
    <script src="../resources/js/game-card-controller.js"></script>
@endsection

