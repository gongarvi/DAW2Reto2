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
                <a  class="nav-link text-light" href="{{route("juegos")}}">Modo Historia</a>
            </li>
        </ul>
    </div>
    <div class="dropdown position- r-">
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
    </div>
</nav>

