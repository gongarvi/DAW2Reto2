@extends("layouts.page")

@section("head-extras")

    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="{{asset("css/matching.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
    <link rel="stylesheet" href="{{asset("css/panelControl.css")}}">
    <link rel="stylesheet" href="{{asset("css/iconos/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('content')

<h1>PANEL DE ADMINISTRACION</h1>
<div class="container">
    <div class="row panel">
        <div class="col-12">
            <ul>
                <li>
                    <a href="{{ route('mujeres.index') }}"><h3>MUJERES</h3></a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <ul>
                <li>
                    <a href="{{route('especialidades.index')}}"><h3>ESPECIALIDADES</h3></a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <ul>
                <li>
                    <a href="{{ route('usuarios.index') }}"><h3>USUARIOS</h3></a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <ul>
                <li>
                    <a href="{{ route('preguntas.index') }}"><h3>PREGUNTAS</h3></a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <ul>
                <li>
                    <a href="{{ route('respuestas.index') }}"><h3>RESPUESTAS</h3></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}">
    </script>
@endsection
