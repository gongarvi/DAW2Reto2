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
        <div class="row justify-content-center">
            <div class="col-xs-6 col-xs-offset-3">
            @if($message =Session::get('success'))
                <div class="alert alter-success">
                    <p>{{$message}}</p>
                </div>
            @endif
                <form action="/actualizarPerfil/{{$usuario->id}}" method="POST">
                @csrf
                    <fieldset class="form-group">
                        <legend class="col-form-label col-sm-2 pt-0">Modificar datos</legend>
                        <input type="hidden" value="datos" name="funcion">
                        <img src="{{ (trim($usuario->foto)!=='')?asset('assets/Fotos_mujeres/'.$usuario->foto):asset('image/placeholder-usuario.png')}}" alt="" title="" class="rounded-circle mt-2" style="height: 200px;"/><br>
                        <button class="btn btn-light m-2">Cambiar foto</button>
                        <div class="d-flex flex-column">
                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                <label for="name" class="text-light">Nombre: </label>
                                    <div class="input-group">
                                        <input  name="name" value="{{$usuario->name}}" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                <label for="email" class="text-light">Correo: </label>
                                    <div class="input-group">
                                        <input readonly name="email" placeholder="{{$usuario->email}}" class="form-control"  type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                <label for="password" class="text-warning">Escribe tu contraseña para confirmar</label>
                                    <div class="input-group">
                                        <input  name="password" placeholder="Contraseña" class="form-control"  type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="reset" class="btn btn-danger mb-2">
                        <input type="submit" value="Actualizar Usuario" class="btn btn-primary mb-2">
                    </fieldset>
                </form>

                <form action="/actualizarPerfil/{{$usuario->id}}" method="post">
                @method('POST')
                @csrf
                    <fieldset class="form-group">
                        <legend class="col-form-label col-sm-2 pt-0">Cambiar contraseña</legend>
                        <input type="hidden" value="contrasena" name="funcion">
                        <div class="d-flex flex-column">
                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <input  name="actual_password" placeholder="Contraseña actual" class="form-control"  type="password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <input  name="new_password" placeholder="Contraseña nueva" class="form-control"  type="password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <input  name="confirm_password" placeholder="Confirmar contraseña nueva" class="form-control"  type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="reset" class="btn btn-danger mb-2">
                        <input type="submit" value="Actualizar Usuario" class="btn btn-primary mb-2">
                    </fieldset>
                </form>

                <form action="/eliminarPerfil/{{$usuario->id}}" method="post">
                    @method('POST')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar mi cuenta</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection