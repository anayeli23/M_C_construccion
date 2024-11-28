<?php
function mostrarformularioingreso($mensaje)
{
    if (empty($mensaje)) {

?>

        <form action="/controllers/controladorUsuario.php" method="POST">
<<<<<<< HEAD
        <br>
            <label for="datusuario"> USUARIO </label>
            <input type="text" name="datusuario" id="datusuario" autocomplete="off">
            <br>
            <br>
            <label for="datpassword"> PASSWORD </label>
            <input type="password" name="datpassword" id="datpassword" autocomplete="off">
            <br>
            <br>
            <label for="datperfil"> PERFIL </label>
            <input type="text" name="datperfil" id="datperfil" autocomplete="off">
            <br>
=======
            <label for="datusuario"> USUARIO </label>
            <input type="text" name="datusuario" id="datusuario">
            <br>
            <label for="datpassword"> PASSWORD </label>
            <input type="password" name="datpassword" id="datpassword">
            <br>
            <label for="datperfil"> PERFIL </label>
            <input type="text" name="datperfil" id="datperfil">
>>>>>>> 79ea0e95ed843fd4c878f7f5140bb1c1dff5afa3
            <br>
            <button type="submit"> REGISTRAR USUARIO</button>
        </form>
<?php
    } else {
        echo $mensaje;
    }
}
?>