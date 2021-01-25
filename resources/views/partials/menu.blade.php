<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <button class="navbar-toggler btn" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">
            <li class="nav-ite m-auto mx-lg-0">
                <a class="navbar-brand m-auto text-light" href="{{route("inicio")}}">
                    <img class="w-25 h-25 d-block mx-auto" src="{{asset("image/logo.png")}}" alt="Imagen corporativa">
                </a>
            </li>
            <li class="nav-item m-auto mx-lg-0">
                <a class="nav-link m-auto text-light" href="{{route("home")}}">Inicio</a>
            </li>
            <li class="nav-item m-auto mx-lg-0">
                <a class="nav-link text-light" href="{{route("mujeres")}}">Mujeres</a>
            </li>
            <li class="nav-item m-auto mx-lg-0">
                <a class="nav-link text-light" href="{{route("juegos")}}">Modo Historia</a>
            </li>
           <!-- Aqui controlamos si el usuario está logeado y si es administrador
                para mostrar la opcion de administracion en el menu -->
        <!--  @php 
                $logeado = Route::has('login');
                $administrador = 0;
            @endphp

            @if($logeado == 1)
                 @php
                    $administrador = isset(Auth::user()->administrador);
                  
                @endphp 
                    
                    @if ( $administrador == 1 )
                        <li class="nav-item m-auto mx-lg-0">
                            <a class="nav-link text-light" href="{{route("panel")}}">Administrar</a>
                        </li>        
                    @endif
            @endif  -->
        </ul>
    </div>

    <!-- Parte de inicio de sesion -->
    <div class="dropdown position- r-" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- Si no ha iniciado sesion -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrar</a>
            </li>
            @endif
            <!-- Ha iniciado sesion -->
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="{{ (trim(Auth::user()->foto)!=='')?asset('assets/Fotos_mujeres/'.Auth::user()->foto):asset('image/placeholder-usuario.png')}}" alt="" title="" class="rounded-circle" style="height: 50px;" />
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('perfil') }}">
                        Editar perfil 
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Cerrar sesion <i class="fa fa-sign-out text-grey"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>


    <!-- <div class="dropdown position- r-">
        <a class="nav-link dropdown-toggle" href="#" id="perfilDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="d-block mx-auto" src="{{asset("image/placeholder-usuario.png")}}" alt="Imagen del usuario" style="width: 50px; height: 50px;">
        </a>
        @auth
            <div class="dropdown-menu bg-dark float-right" aria-labelledby="perfilDropDown">
                <li class="dropdown-item m-auto mx-lg-0">
                    <a class="nav-link m-auto text-light" href="{{route("perfil")}}">Perfil</a>
                </li>
                <li class="dropdown-item m-auto mx-lg-0">
                    <a class="nav-link text-light" href="{{route("logout")}}">Cerrar Sesión</a>
                </li>
            </div>
        @endauth
    </div> -->
</nav>