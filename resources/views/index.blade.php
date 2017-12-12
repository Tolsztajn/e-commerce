




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
      <!-- main content-->
            <div class="contenedor">
              <div class="row">
                <div class="col-lg-12">
      <?php
                  if (!isset($_GET['pagina'])) {
          header('Location: ?pagina=home');
          exit;
      }
                  $pagesPermitidas = ['home','login','preguntasFrecuentes','register'];
                  if(isset($_GET['pagina']) && in_array($_GET['pagina'],$pagesPermitidas)){
                    include('pages/'.$_GET['pagina'].'.blade.php');
                  }else{
                    include('pages/404.blade.php');
                  }






      //            if($pepe == "preguntas"){
                      @yield('preguntas')
                  }
                  else{

                  }

                  ?>
                </div>
              </div>
            </div>
            </div>

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

    </body>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
