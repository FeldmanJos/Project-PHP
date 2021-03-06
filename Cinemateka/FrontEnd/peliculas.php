<?php
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
//$twig = new Twig_Environment($loader, array('cache' => 'cache') );
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate('greeting.html');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cinemateka</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 9]>
          <script src="html5shiv.js"></script>
          <script src="respond.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="volver" >
            <a href="cines.php">Volver a Cines</a>
        </div>
        <div class="logo">
            <img src="img/costa.png"/>
        </div>
        <div id="intro" class="intro">

            <div class="slogan"><h1>Cines de la Costa - Shopping</h1><br><br>
            </div>
            <div class="cartelera" >
                <p>Cartelera Semana Jueves 25/12 - Miercoles 31/12</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <a href="descripcion.php">
                        <img src="img/thumb/1.jpg" class="img-responsive" alt="img"><br>El Aprendiz
                    </a>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <a href="">
                        <img src="img/thumb/2.jpg" class="img-responsive" alt="img"><br>Grandes Heroes
                    </a>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <a href="">
                        <img src="img/thumb/3.jpg" class="img-responsive" alt="img"><br>Exodo: Dioses y Reyes
                    </a>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <a href="">
                        <img src="img/thumb/4.jpg" class="img-responsive" alt="img"><br>Regreso del Infierno
                    </a>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>