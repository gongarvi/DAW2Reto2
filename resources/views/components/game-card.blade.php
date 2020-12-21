<div class="card">
    <div class="card-body">
        <div class="card-front">
            <img src="{{$juego['imagen']}}" alt="Imagen {{$juego['nombre']}}" onerror="javascript:this.src='image/placeholder.png'">
        </div>
        <div class="card-back">
            <a href="{{"juegos/".$juego["nombre"]}}">
                <div class="w-100 h-100 p-3 p-lg-5">
                    <h5 class="card-title">{{ucfirst($juego["nombre"])}}</h5>
                    <p class="card-text">{{$juego["descripcion"]}}</p>
                </div>
            </a>
        </div>
    </div>
</div>
