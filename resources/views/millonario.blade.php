@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
@endsection

@section("content")
    <div id="juego">
        <img class="text-center m-auto" src="{{asset("image/logo.png")}}">
        <millonario/>
    </div>
    <script src="{{asset("js/millonario.js")}}"></script>
@endsection
