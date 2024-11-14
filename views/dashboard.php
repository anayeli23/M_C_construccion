<?php
session_start();
if (!isset($_SESSION["txtusername"])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/estilodashboard.css">
</head>
<body>
    

<div class="menudashboard">
        <h3>ESTE ES EL MENU </MENU> </h3>
        <ul>
            <li><a href="?opcion=inicio">Inicio</a></li>
            <li><a href="?opcion=ver">Ver</a></li>
            <li><a href="?opcion=ingresar">Ingresar</a></li>
            <li><a href="?opcion=modificar">Modificar</a></li>
            <li><a href="?opcion=eliminar">Eliminar</a></li>
            <li><a href="http://mc_construccion.test/logout.php">SALIR DEL SISTEMA</a></li>
        </ul>
    </div>
    <div class="contenido" >
        <?php
        if(isset($_GET["opcion"])){
            $opcion = $_GET["opcion"];

            echo $opcion;   
        }
        ?>
</div>
</body>
</html>