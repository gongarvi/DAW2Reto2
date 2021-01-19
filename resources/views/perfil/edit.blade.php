@extends("layouts.page")

@section("content")
    @foreach($perfil as $perfi)
       
       <form action="">
        <label for="nombre">Nombre</label><br>
        <input name="nombre"  placeholder="{{$perfi->name}}" type="text"><br>
        <label for="email">Email</label><br>
        <input name="email"  placeholder="{{$perfi->email}}" type="text"><br>
        <label for="contrasenha">Nueva Contraseña</label><br>
        <input name="contrasenha"  placeholder="Contarseña" type="text"><br>
        <label for="confirmar_contrasenha">Email</label><br>
        <input name="confirmar_contrasenha"  placeholder="Confirmar contrseña" type="text"><br>
        <input type="reset" >
        <button><a href="">Actualizar Usuario</a></button>
       </form>
       
    
    @endforeach
@endsection