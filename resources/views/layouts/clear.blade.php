<!doctype html>
<html lang="es">
<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include("partials.include")

    @yield("head-extras")

</head>
<body>
    <header>
        @yield('cabecera')
    </header>
    <main id="app">
        @yield("content")
    </main>
    <footer>

    </footer>
</body>
</html>

