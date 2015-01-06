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
            <a href="index.php">Volver a Inicio</a>
        </div>
        <div class="logo">
            <?php
            $params = array('imagen' => 'img/cinemateka.png');
            $template->display($params);
            ?>
        </div>
        <div id="intro" class="intro">
            <div class="slogan"> Seleccioná tu cine:<br><br></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <a href="">
                        <img src="img/cinemacenter.png" class="img-responsive" alt="img"><br>Cinemacenter - Carrefour
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <a href="">
                        <img src="img/costa.png" class="img-responsive" alt="img"><br>Cines de la Costa - Costanera
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <a href="peliculas.php">
                        <img src="img/costa.png" class="img-responsive" alt="img"><br>Cines de la Costa - Shopping
                    </a>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>