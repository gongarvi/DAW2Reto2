@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
@endsection

@section("content")
    <div id="app">
        <h1 style="text-align:center">Buscaminas</h1>
        <img class="text-center m-auto" src="{{asset("image/logo.png")}}" >
        <buscaminas/>
    </div>
    
@endsection