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
        <div id="intro" class="intro">
            <?php
            $params = array('imagen' => 'img/cinemateka.png');
            $template->display($params);
            ?>
            <div class="slogan">
                <select id="lista">
                    <option value="">Selecciona tu ciudad: </option>
                    <option id="lista" value="corrientes">Corrientes</option>
                    <option id="lista" value="resistencia">Resistencia</option>
                </select>
                
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>