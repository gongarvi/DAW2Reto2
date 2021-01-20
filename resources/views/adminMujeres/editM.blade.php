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
    <h2>Editar Mujer</h2>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="volver">
            <a class="btn btn-primary" href="{{ route('adminMujer')}}">Volver</a>
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
    <form action="{{ route('actualizarMujer',$mujer->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Nombre:</p>
                    <input type="text" name="nombre" value="{{$mujer->nombre}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Apellidos:</p>
                    <input type="text" name="apellidos" value="{{$mujer->apellidos}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Nacimiento:</p>
                    <input type="text" name="nacimiento" value="{{$mujer->nacimiento}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Fallecimiento:</p>
                    <input type="text" name="fallecido" value="{{$mujer->fallecido}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Nacionalidad:</p>
                    <input type="text" name="nacionalidad" value="{{$mujer->nacionalidad}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Especialidad:</p>
                    <select name="especialdiad" class="form-control" required>
                    @if($mujer->especialdies==null)
                    <option selected disabled value="">Selecciona una especialidad</option>
                    @endif
                        @foreach($especialidades as $especialidad)

                            @if($mujer->especialdies!=null && $especialidad->id===$mujer->especialidades->id)
                                <option selected value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>
                            @else
                            <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Foto:</p>
                    <input type="text" name="nacimiento" value="{{$mujer->foto}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p>Descripción:</p>
                    <input type="text" name="descripcion" value="{{$mujer->descripcion}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 guardar">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection