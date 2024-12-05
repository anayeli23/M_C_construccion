<?php

if (session_status() == PHP_SESSION_NONE) {
        session_start();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';

if (!isset($_SESSION["txtusername"])) {
        header('location: ' . get_urlBase('index.php'));
        exit;
}

$opcion = $_GET["opcion"] ?? 'inicio'; //por defecto a la pagina inicial
$contenido = '';

switch ($opcion) {
        case 'inicio':
                $contenido = "<H1> BIENVENIDO AL SISTEMA </H1> ";
                break;
        case 'ver':
                ob_start();
                include get_controllers_disk("controladorUsuario.php");
                $contenido = ob_get_clean();
                break;
        case 'ingresar':
                ob_start();
                include get_controllers_disk("controladoringresarusuario.php");
                $contenido = ob_get_clean();
                break;
        case 'modificar':
                ob_start();
                include get_controllers_disk("controladoractualizarusuario.php");
                $contenido = ob_get_clean();
                break;
        case 'eliminar':
                ob_start();
                include get_controllers_disk("controladoreliminarusuario.php");
                $contenido = ob_get_clean();
                break;
        default:
                http_response_code(400);
                $contenido = "<h1> error </h1>";
                break;
}

include get_views_disk('vistadashboard.php');
