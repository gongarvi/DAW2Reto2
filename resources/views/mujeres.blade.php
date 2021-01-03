@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section("content")

<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
  </span>
</a>

<div class="container-fluid" id="app">
    <div class="row">

        <aside class="col-sm-4 col-md-4 col-lg-2 text-white text-center">

            <form class="form-inline active-purple-4 mt-3 mb-3">
                <input class="form-control form-control-sm mr-2 w-75" type="text" placeholder="Buscar.."
                    aria-label="Buscar">
                <i class="fa fa-search" aria-hidden="true"></i>
            </form>

            <h5>Especialidades:</h5>
            @foreach($especialidades as $especialidad)
            <div style="background-color: {!! $especialidad->color !!};" title="Filtrar por esta especialidad">
                <p class="m-2 text-light">{!! $especialidad->Nombre !!}</p>
            </div>
            @endforeach
    
        </aside>

        <main class="col-sm-8 col-md-8 col-lg-10 d-flex flex-row flex-wrap text-center">
            @foreach($mujeres as $mujer)
            <div class="cards p-2 m-2 rounded text-light" style="background-color: {!! $mujer->color !!};" title="Click para Saber mas sobre ella">
                <img src="..\public\assets\Fotos_mujeres\{!! $mujer->foto !!}" class="img-fluid" alt="Foto">
                <p>{!! $mujer->nombre !!} {!! $mujer->apellidos !!}</p>
                <!-- <p id="especialidad">{!! $mujer->Nombre !!}</p> -->
                <i class="fa fa-trash-o" @click="eliminarMujer()"></i>
            </div>
            @endforeach
        </main>

    </div>
</div>

    <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
    <script src="../public/js/mujeres.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){ //Hacia arriba
            irArriba();
        });
        
        function irArriba(){
            $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
            $(window).scroll(function(){
            if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
            });
            $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
        }
    </script>

@endsection