<?php

function mostrarFormularioIngreso($mensaje)
{
    if (empty($mensaje)) {

?>
        <form action="/controllers/controladoringresarusuario.php" method="POST">
            <label for="datusiario"> usuario </label>
            <input type="text" name="datusuario" id="datusuario" autocomplete="off">
            <br>
            <br>
            <label for="datpassword"> Password </label>
            <input type="password" name="datpassword" id="datpassword" autocomplete="off">
            <br>
            <br>
            <label for="datperfil"> perfil </label>
            <input type="text" name="datperfil" id="datperfil" autocomplete="off">
            <br>
            <br>
            <button type="submit"> Registrar usuario </button>
        </form>

<?php
    } else {
        echo $mensaje;
    }
}
?>