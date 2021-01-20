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
    <h2>Gestion de Mujeres</h2>

</div>


@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif
<div class="datos">
<a href="{{ route ('panel')}}" style="display:flex; justify-content:center; text-decoration:none; "><button class="btn btn-info">Volver al panel</button></a>
    <table class="">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Nacimiento</th>
            <th>Fecha Muerte</th>
            <th>Nacionalidad</th>
            <th>Especialidad</th>
            <th width="250px">Operaciones</th>
        </tr>
        @foreach( $mujeres as $mujer )
            <tr>
                <td>{{$mujer->nombre}}</td>
                <td>{{$mujer->apellidos}}</td>
                <td>{{$mujer->nacimiento}}</td>
                <td>{{$mujer->fallecido}}</td>
                <td>{{$mujer->nacionalidad}}</td>
                <td>{{($mujer->especialidades!=null)?$mujer->especialidades->nombre:""}}</td>
                <td>
                    <form action="{{ route('eliminarMujer',$mujer->id)}}" method="post">
                        
                        <a href="{{ route('editarMujer',$mujer->id)}}" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger"><span class="icon-trash"></span></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col">
            <div class="añadir">
                <a class="btn btn-success" href="{{ route('nuevaMujer')}}">Añadir Mujer</a>
            </div>
        </div>
    </div>
</div>
@if($mujeres->count())
       
       {{$mujeres->links()}}
         
@endif 
@endsection