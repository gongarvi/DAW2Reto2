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
    <h2>Gestion de Usuarios</h2>

</div>


@if($message = Session::get('success'))
    <div class="alert alert-success mensaje">
        <p>{{$message}}</p>
    </div>
@endif

<div class="datos">
<a href="{{ route ('panel')}}" style="display:flex; justify-content:center; text-decoration:none; "><button class="btn btn-info">Volver al panel</button></a>
  <table>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Administrador</th>
        <th>Operaciones</th>
    </tr>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->administrador}}</td>
            <td>
                <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
                    <a href="{{ route('usuarios.edit',$usuario)}}" class="btn btn-info"><span class="icon-edit"></span></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><span class="icon-trash"></span></button>
                </form>  
            </td>
        </tr>
    @endforeach
  </table>
  <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            @if($usuarios->count())
    
                {{$usuarios->links('pagination::bootstrap-4')}}

            @endif  
        </div>
    </div>
</div>


@endsection