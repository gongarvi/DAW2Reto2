@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
@endsection

@section("content")
    <div id="juego">
        <millonario/>
    </div>
    <script src="{{asset("js/millonario.js")}}"></script>
@endsection
