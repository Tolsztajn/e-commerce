<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--link rel="stylesheet" href="../public/css/styles.css"-->
    <link rel="stylesheet" href="/css/styles_viejos.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet" type="text/css">
</head>
<body>

  <div class="contenedor"> <!-- Contenedor principal -->


        <header> <!-- Encabezado logo + menu -->
          <div class="first-nav">
            <a href="?pagina=home"><img src="img/logo-1.svg" alt="logo wt" class="logo1"></a>
            <img src="img/menu.svg" alt="" class="menu-button">
            <nav class="second-nav">
              <ul>
                <li><a href="#">HABITACIONES</a></li>
                <li><a href="#">DEPARTAMENTOS</a></li>
                <li><a href="#">CASAS ENTERAS</a></li>
                <li><a href="#">HOSTELS</a></li>
              </ul>
            </nav>
            <nav class="login">
              <ul>
                <li><a href="?pagina=login">LOGIN</a></li>
                <?php if (isset($_SESSION["usuario"])):?>
                <li><a href="#">¡Bienvenido <?php echo $_SESSION["usuario"]; ?>!</a></li>
              <?php endif?>
              </ul>
            </nav>
          </div>
        </header>



@yield('section')




      <footer class="main-footer">
        <nav class="nav-footer">
          <ul>
            <li><a href="?pagina=quines-somos">QUIENES SOMOS</a></li>
            <li><a href="?pagina=preguntasFrecuentes">FAQ</a></li>
            <li><a href="?pagina=contacto">CONTACTO</a></li>
          </ul>
        </nav>
      </footer>


  </div>











    <!-- Scripts -->.
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
