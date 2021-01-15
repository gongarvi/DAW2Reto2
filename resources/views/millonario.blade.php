@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
@endsection

@section("content")
    <div id="app">
        <img class="text-center m-auto" src="{{asset("image/logo.png")}}">
        <millonario/>
    </div>
@endsection
