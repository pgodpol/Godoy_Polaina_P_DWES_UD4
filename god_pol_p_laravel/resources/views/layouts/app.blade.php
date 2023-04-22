<html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
  <head>
    <meta charset='utf-8' />
    <title>@yield('title') - Almacén de obras</title>
    <link rel='stylesheet' href='{{ asset("css/estilo.css") }}'>
  </head>
  <body>
    <h1>Mi almecén de obras: películas y discos</h1>

    @yield('content')

    <footer>Creado por Pedro Godoy</footer>

  </body>
</html>
