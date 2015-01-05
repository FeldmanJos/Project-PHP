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
            <a href="">Volver a Menu</a>
        </div>
        <div class="logo">
            <?php
            $params = array('imagen' => 'img/cinemateka.png');
            $template->display($params);
            ?>
        </div>
        <form id="contact-form">
            <div class="row">
                <div class="form-group">
                    <label for="nombre">
                        Nombre:<br>
                        <input type="text" class="form-control" name="nombre" id="name" required="required" /></label>
                </div>
                <div class="form-group">
                    <label>Genero: <br>
                        <input type="text" class="form-control" name="genero" id="genero" required="required" /></label>
                </div>
                <div class="form-group">
                    <label>Director: <br>
                        <input type="text" class="form-control" name="director" id="director" required="required" /></label>
                </div>
                <div class="form-group">
                    <label>Año: <br>
                        <input type="text" class="form-control" name="anio" id="anio" required="required" /></label>
                </div>
                <div class="form-group">
                    <label for="descripcion">
                        Descripción: <br>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="5" cols="40" required="required"></textarea></label>
                </div>
                <div class="centrar-boton">
                    <button name="submit" class="btn btn-skin btn-block" id="btnContactUs">
                        Agregar Película
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>