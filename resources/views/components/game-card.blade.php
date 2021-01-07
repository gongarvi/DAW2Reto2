<div class="card">
    <div class="card-body">
        <div class="card-front">
            <img style="width:65%;height:auto;" src="{{$juego['imagen']}}" alt="Imagen {{$juego['nombre']}}" onerror="javascript:this.src='image/placeholder.png'">
            <h2>Nivel {{$juego['id']}}</h2>
            @if(5 >= $juego['id'])
            <img style="width:25%;height:auto;" src="assets/Fotos_Juegos/candado.png" alt="Imagen {{$juego['nombre']}}" onerror="javascript:this.src='image/placeholder.png'">
            @endif
        </div>
        <div class="card-back">
            <a href="{{"juegos/".$juego["nombre"]}}">
                <div class="w-100 h-100 p-3 p-lg-5">
                    <h5 id="nombreJuego"class="card-title">{{ucfirst($juego["nombre"])}}</h5>
                    <p class="card-text">{{$juego["descripcion"]}}</p>
                </div>
            </a>
        </div>
    </div>
</div>

