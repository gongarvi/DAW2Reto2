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
    <h2>Gestion de Especialidades</h2>
    
</div>
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<div class="datos">
<a href="{{ route ('panel')}}" style="display:flex; justify-content:center; text-decoration:none; "><button class="btn btn-info">Volver al panel</button></a>
 <table>
    <th>Id</th>
    <th>Nombre</th>
    <th>Color</th>
    <th>Operaciones</th>
    @foreach($especialidades as $especialidad)
        <tr>
            <td>{{$especialidad->id}}</td>
            <td>{{$especialidad->nombre}}</td>
            <td>{{$especialidad->color}}</td>
            <td>
                <form action="{{ route('eliminarEspecialidad', $especialidad->id) }}" method="post">
                
                    <a href="{{ route('editarEspecialidad', $especialidad->id) }}" class="btn btn-primary">Editar</a>
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
                <a class="btn btn-success" href="{{ route('insertarEsp')}}">Añadir Especialidad</a>
            </div>
        </div>
    </div>
</div>
@endsection