<?php

session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_urlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];

    $conexion = new conexion($host, $namedb, $userdb, $passwordb);
    $pdo = $conexion->obtenerConexion();
    try {
        $sentencia = $pdo->prepare("INSERT INTO usuarios ( username, password, perfil) VALUES (? ,? ,?);");
        $sentencia->execute([$tmpdatusuario,$tmpdatpassword,$tmpdatperfil]);
        echo "usuario resgistrado con EXITO <br>";
    } catch (PDOException $e) {
        echo "hubo un error,intente mas rato por favor <br>";
        echo $e->getMessage();
    }
    exit();
}
?>

<form action="" method="POST">
    <label for="datusuario"> USUARIO </label>
    <input type="text" name="datusuario" id="datusuario">
    <br>
    <label for="datpassword"> PASSWORD </label>
    <input type="password" name="datpassword" id="datpassword">
    <br>
    <label for="datperfil"> PERFIL </label>
    <input type="text" name="datperfil" id="datperfil">
    <br>
    <button type="submit"> REGISTRAR USUARIO</button>
</form>