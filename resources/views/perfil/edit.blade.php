@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/formularios.css")}}">
@endsection

@section("content")
@if($errors->any())
    @foreach($errors->all as $error)
        <p>{{$error}}</p>
    @endforeach
@endif
<div class="container">
    <div class="row w-100 justify-content-center">
		<div class="col-md-8">
            @if($message =Session::get('success'))
                <div class="alert alter-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/actualizarPerfil/{{$usuario->id}}" method="POST">
                @csrf
				<input type="hidden" value="datos" name="funcion">

                <div class="form-group">
                    <img src="{{ (trim($usuario->foto)!=='')?asset('assets/Fotos_mujeres/'.$usuario->foto):asset('image/placeholder-usuario.png')}}" alt="" title="" class="rounded-circle mt-2" style="height: 200px;"/><br>
                    <button class="btn btn-outline-secondary mt-2"> > Cambiar foto</button>
                </div>

				<div class="form-group">
                    <label for="name" class="text-light">Nombre: </label>
                    <input  name="name" value="{{$usuario->name}}" class="form-control"  type="text">
                </div>
					
				<div class="form-group">
                    <label for="email" class="text-light">Correo: </label>            
                    <input readonly name="email" placeholder="{{$usuario->email}}" class="form-control"  type="email">
				</div>

                <div class="form-group">
                    <label for="password" class="text-warning">Escribe tu contraseña para confirmar</label>            
                    <input  name="password" placeholder="Contraseña" class="form-control"  type="password">
				</div>
                <input type="reset" class="btn btn-danger mb-2">
                <input type="submit" value="Actualizar Usuario" class="btn btn-success mb-2">
			</form>

            <form action="/actualizarPerfil/{{$usuario->id}}" method="post">
                @method('POST')
                @csrf
                <h2 class="mt-5">Cambiar contraseña</h2>
				<input type="hidden" value="contrasena" name="funcion">
					
				<div class="form-group">
                    <input  name="actual_password" placeholder="Contraseña actual" class="form-control"  type="password">
                </div>
					
				<div class="form-group">
                    <input  name="new_password" placeholder="Contraseña nueva" class="form-control"  type="password">
				</div>

                <div class="form-group">
                    <input  name="confirm_password" placeholder="Confirmar contraseña nueva" class="form-control"  type="password">
				</div>
                <input type="reset" class="btn btn-danger mb-2">
                <input type="submit" value="Actualizar contraseña" class="btn btn-success mb-2">
			</form>

            <form action="/eliminarPerfil/{{$usuario->id}}" method="post">
                @method('POST')
                @csrf
                <button class="btn btn-danger mt-5" type="reset" data-toggle="modal" data-target="#myModal">Eliminar mi cuenta</button>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content text-dark">
                            <div class="modal-header">
                            <h4 class="modal-title">Mensaje de confirmacion</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <b>¿Esta seguro que desea eliminar su usuario?</b>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

		</div>
	</div>
</div>
    
@endsection