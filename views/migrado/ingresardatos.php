<?php

session_start();


if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];

    $conexion = new conexion();
    $pdo = $conexion->obtenerConexion();

    try {
        $sentencia = $pdo->prepare("INSERT INTO usuarios  (username, password, perfil) VALUES (?,?,?);");
        $sentencia->execute([$tmpdatusuario, $tmpdatpassword, $tmpdatperfil]);
        echo "usuario registrado con exito <br>";
    } catch (PDOException $e) {
        echo "hubo un error ...<br>";
        echo $e->getMessage();
    }
    exit(); //corta la ejecucion
}

?>

<form action="" method="POST">
    <br>
    <label for="datusuario"> Usuario </label>
    <input type="text" name="datusuario" id="datusuario">
    <br>
    <br>
    <label for="datpasword"> password </label>
    <input type="password" name="datpassword" id="datpassword">
    <br>
    <br>
    <label for="datperfil"> perfil </label>
    <input type="datperfil" name="datperfil" id="datperfil">
    <br>
    <br>
    <button type="submit"> registrar usuario </button>
</form>