<?php

session_start();

if (!isset( $_SESSION["txtusername"])) {
    header('location: '.get_urlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_urlBase('../css/styledashboard.css') ?> ">
</head>
<body>
    <div class="menu">
        <h3>Este es el menu</h3>
        <ul>
            <li> <a href="?opcion=inicio"> inicio </a></li>
            <li> <a href="?opcion=ver"> ver </a> </li>
            <li> <a href="?opcion=ingresar"> ingresar </a> </li>
            <li> <a href="?opcion=modificar"> modificar </a> </li>
            <li> <a href="?opcion=eliminar"> eliminar </a> </li>
            <li> <a href="<?php echo get_controllers('logout.php') ?>" > salir </a> </li>
        </ul>
    </div>

    <div class="contenido">
        <?php
        if(isset($_GET["opcion"]) ) {
            $opcion = $_GET["opcion"];

            switch ($opcion) {
                case 'inicio' :
                    echo "<H1> BIENVENIDO AL SISTEMA </H1> ";
                    break; 
                case 'ver' :
                    echo "<iframe src='".get_controllers("controladorUsuario.php")."' ></iframe>";
                    break; 
                case 'ingresar' :
                    echo "<iframe src='".get_controllers("controladorIngresarUsuario.php")."' ></iframe>";
                    break; 
                case 'modificar' :
                    echo "<iframe src='".get_controllers("controladorActualizarUsuario.php")."' ></iframe>";
                    break;
                case 'eliminar' :
                    echo "<iframe src='".get_controllers("controladorEliminarUsuario.php")."' ></iframe>";
                    break; 
            }
        }
        ?>

    </div>
</body>
</html>