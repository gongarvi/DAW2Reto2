@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
@endsection

@section("content")
    <div id="game-cards-controller" class="container" >
        <ul class="row">
            @foreach($juegos as $juego)
                <li class="list-group-item bg-transparent border-0 col-xs-12 col-sm-4">
                    <x-gamecard :juego="$juego"></x-gamecard>
                </li>
            @endforeach
        </ul>
    </div>
    <script src="{{asset("js/game-card-controller.js")}}"></script>
@endsection
