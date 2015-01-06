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
            <a href="peliculas.php">Volver a Cartelera</a>
        </div>
        <div class="logo">
            <img src="img/costa.png"/>
        </div>
        <div id="intro" class="intro">

            <div class="slogan"><h1>Cines de la Costa - Shopping</h1><br><br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3" >
                    <img src="img/1.jpg" class="img-responsive" alt="img"><br>El Aprendiz
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <h3>SINOPSIS</h3>
                    <p>
                        Peter Devereaux es un veterano y peligroso ex agente de
                        la CIA, que disfruta de unas vacaciones y lleva una vida
                        tranquila en Suiza. Pero, de pronto, lo llaman de su retiro
                        para realizar una última misión: proteger a la bella Alice
                        Fournier, una testigo clave para la Agencia.
                    </p>
                    <hr>
                    <h3>DESCRIPCION</h3>
                    <p style="text-align: left">Género: Suspenso , Policial , Acción.<br>
                       Duración: 108 Minutos
                    </p>
                    <hr>
                    <h3>HORARIOS</h3>
                    <p style="color: red">18:00 | 20:00-SUB | 21:45</p>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
