<?php
function mostrarformularioingreso($mensaje)
{
    if (empty($mensaje)) {

?>

        <form action="/controllers/controladorUsuario.php" method="POST">
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
<?php
    } else {
        echo $mensaje;
    }
}
?>