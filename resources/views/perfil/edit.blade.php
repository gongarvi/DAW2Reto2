@extends("layouts.page")

@section("head-extras")
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection

@section("content")
    @foreach($perfil as $usuario)
        <div class="container container-fluid">
            <div style="background-color:rgba(0,0,0,0.555);">
                <div class="m-5"> 
                    <form action="" >
                        <img src="{{ (trim($usuario->foto)!=='')?asset('assets/Fotos_mujeres/'.$usuario->foto):asset('image/placeholder-usuario.png')}}" alt="" title="" class="rounded-circle mt-2" style="height: 200px;"/><br>
                        <button class="btn btn-secondary m-2">Cambiar foto</button>
                        <div class="d-flex flex-column">
                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="nombre" placeholder="{{$usuario->name}}" class="form-control"  type="text" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input  name="nombre" placeholder="{{$usuario->email}}" class="form-control"  type="email" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="password" placeholder="Contraseña" class="form-control"  type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="confirm-password" placeholder="Confirmar contrseña" class="form-control"  type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="reset" class="btn btn-danger mb-2">
                        <a href=""><button class="btn btn-primary mb-2">Actualizar Usuario</button></a>
                    </form>
                </div>
            </div>
       </div>
       
       
    
    @endforeach
@endsection