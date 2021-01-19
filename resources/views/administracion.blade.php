@extends("layouts.page")

@section("head-extras")
   
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="{{asset("css/matching.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
    <link rel="stylesheet" href="{{asset("css/panelControl.css")}}">
    <link rel="stylesheet" href="{{asset("css/iconos/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
@endsection

@section('content')

<h1>PANEL DE ADMINISTRACIÓN</h1>
<ul>
    <li>
        <a href="{{ route('admin') }}"><h3>Mujeres</h3></a>
    </li>
    <li>
        <a href="{{ route('inicio') }}"><h3>Especialidades</h3></a>
    </li>
</ul>

@endsection