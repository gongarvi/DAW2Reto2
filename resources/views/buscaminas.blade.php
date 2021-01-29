@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{ URL::asset('css/game-page.css') }}">
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="{{asset("css/matching.css")}}">
    <link rel="stylesheet" href="{{asset("css/iconos/style.css")}}">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
@endsection

@section("content")
    <div id="app">
        <h1>DESAYUNOS FEMINISTAS </h1></BR>
        <h2>BUSCAMINAS</h2>
        <buscaminas/>
    </div>
    <script src="{{asset('js/app.js')}}">
    </script>
@endsection