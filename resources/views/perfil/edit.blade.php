@extends("layouts.page")

@section("head-extras")
@endsection

@section("content")
@if($errors->any())
    @foreach($errors->all as $error)
        <p>{{$error}}</p>
    @endforeach
@endif
    <div class="container container-fluid">
        <div style="background-color:rgba(0,0,0,0.555);">
            <div class="m-5"> 
                <form action="/actualizar/{{$usuario->id}}" method="POST">

                    <input type="hidden" value="datos" name="funcion">
                    <img src="{{ (trim($usuario->foto)!=='')?asset('assets/Fotos_mujeres/'.$usuario->foto):asset('image/placeholder-usuario.png')}}" alt="" title="" class="rounded-circle mt-2" style="height: 200px;"/><br>
                    <button class="btn btn-secondary m-2">Cambiar foto</button>
                    <div class="d-flex flex-column">
                        <div class="form-group"> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="name" value="{{$usuario->name}}" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input readonly name="email" placeholder="{{$usuario->email}}" class="form-control"  type="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <label for="password" class="text-warning">Escribe tu contraseña para confirmar</label>
                                    <input  name="password" placeholder="Contraseña" class="form-control"  type="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="reset" class="btn btn-danger mb-2">
                    <input type="submit" value="Actualizar Usuario" class="btn btn-primary mb-2">
                </form>
            </div>
        </div>
    </div>
    
@endsection