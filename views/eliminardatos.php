<?php

session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_urlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

$conexion = new conexion($host, $namedb, $userdb, $passwordb);
$pdo = $conexion->obtenerConexion();

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_urlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuarios = $_POST["datusuario"];

    $conexion = new conexion($host, $namedb, $userdb, $passwordb);
    $pdo = $conexion->obtenerConexion();
    try {
        $sentencia = $pdo->prepare("delete from usuarios where username=?;");
        $sentencia->execute([$tmpdatusuarios]);
        echo "eliminado con EXITO <br>";
    } catch (PDOException $e) {
        echo "ERROR AL ELIMINAR <br>";
        echo $e->getMessage();
    }
    exit();
}

?>

<form action="" method="POST">
    <label for="">A QUIEN DESEA ELIMINAR</label>
    <input type="text" name="datusuario" id="datusuario">
    <br>
    <button type="submit">ELIMINAR USUARIO</button>
</form>