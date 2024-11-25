<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/vistaingresarusuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/modelousuario.php';

if (!isset($_SESSION["txtusername"])) {
    header('location: ' . get_UrlBase('index.php'));
}
$mensaje = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];

    $modelousuario = new modeloUsuario();

    try {
        $modelousuario->insertarInsertar($tmpdatusuario, $tmpdatpassword, $tmpdatperfil);
        echo "usuario resgistrado con EXITO <br>";
    } catch (PDOException $e) {
        $mensaje = "hubo un error ...<br>" . $e->getMessage();
    }
    exit();
}

mostrarformularioingreso('');
?>