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
        </ul>
    </div>

    <!-- Parte de inicio de sesion -->
    <div class="dropdown position- r-" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- Si no ha iniciado sesion -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link btn btn-outline-secondary mr-2 text-light" href="{{ route('login') }}">Iniciar sesion</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link btn btn-outline-secondary text-light" href="{{ route('register') }}">Registrar</a>
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
                    @php
                    $ruta = $_SERVER["REQUEST_URI"];
                    @endphp
                    @if(strpos($ruta, 'perfil') != 1)
                    <a class="dropdown-item" href="perfil/{{ Auth::user()->id}}">
                        Editar perfil
                    </a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
</nav>