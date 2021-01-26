@extends("layouts.page")

@section("head-extras")

    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="{{asset("css/matching.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
    <link rel="stylesheet" href="{{asset("css/iconos/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@endsection

@section('content')
<div class="">
    <h2>Nueva Mujer</h2>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="volver">
            <a class="btn btn-primary" href="{{ route('mujeres.index')}}">Volver</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Atencion</strong>Has dejado algun campo vacio<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="datos">
    <form action="{{ route('mujeres.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Nombre:</p>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Apellidos:</p>
                <input type="text" name="apellidos" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Nacimiento:</p>
                <input type="text" name="nacimiento" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Fallecimiento:</p>
                <input type="text" name="fallecido" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Nacionalidad:</p>
                <input type="text" name="nacionalidad" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Especialidad:</p>
                <select name="especialidad" id="" class="form-control">
                <option value="" selected>Seleccione Especialidad</option>
                   @foreach($especialidades as $especialidad)
                   <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>
                   @endforeach
                </select>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Foto:</p>
                <input type="file" name="foto" class="form-control" accept="image/*">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Descripción:</p>
                <input type="text" name="descripcion" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 guardar">
                <button type="submit" class="btn btn-success">Añadir</button>
            </div>
        </div>
    </form>
</div>
@endsection
