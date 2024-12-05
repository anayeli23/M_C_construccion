<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/models/modelousuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/views/vistaeliminarusuario.php';

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuario = $_POST["datusuario"];

    $mensaje = '';
    if ($tmpdatusuario) {
        $modeloUsuario = new modeloUsuario();
        try {
            $modeloUsuario->eliminarusuarioPorNombre($tmpdatusuario);
            $mensaje = "USUARIO ELIMINADO CON EXITO <br>";
        } catch (PDOException $e) {
            $mensaje = "Error al registrar el usuario ...<br>" . $e->getMessage();
        }
    }
    mostrarFormularioEliminar($mensaje);
} else {
    mostrarFormularioEliminar();
}
