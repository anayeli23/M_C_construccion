<?php

session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_urlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="<?php echo get_urlBase('css/estilodashboard.css') ?>">
</head>

<body>


    <div class="menudashboard">
        <h3>ESTE ES EL MENU </MENU>
        </h3>
        <ul>
            <li><a href="?opcion=inicio">Inicio</a></li>
            <li><a href="?opcion=ver">Ver</a></li>
            <li><a href="?opcion=ingresar">Ingresar</a></li>
            <li><a href="?opcion=modificar">Modificar</a></li>
            <li><a href="?opcion=eliminar">Eliminar</a></li>
            <li><a href="<?php echo get_controllers('logout.php') ?>">SALIR DEL SISTEMA</a></li>
        </ul>
    </div>
    <div class="contenido">
        <?php
        if (isset($_GET["opcion"])) {
            $opcion = $_GET["opcion"];

            switch ($opcion) {
                case 'inicio':
                    echo "<H1> BIENVENIDO AL SISTEMA </H1>";
                    break;
                case 'ver':
                    echo "<iframe src='" . get_views("verdatos.php") . "' ></iframe";
                    break;
                case 'ingresar':
                    echo "<iframe src='" . get_views("ingresardatos.php") . "' ></iframe";
                    echo "MOSTRAR VER INGRESAR";
                    break;
                case 'modificar':
                    echo "<iframe src='" . get_views("modificardatos.php") . "' ></iframe";
                    break;
                case 'eliminar':
                    echo "<iframe src='" . get_views("eliminardatos.php") . "' ></iframe";
                    break;
            }

            //echo $opcion;
        }
        ?>
    </div>
</body>

</html>