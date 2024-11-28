<?php
function mostrarFormularioEliminar($mensaje = '')
{
    if (!empty($mensaje)) {
        echo $mensaje;
    } else {

?>

        <form action="/controllers/controladoreliminarusuario.php" method="POST">
            <label for="">A quien debo eliminar </label>
            <input type="text" name="datusuario" id="datusuario">
            <br>
            <button type="submit">Eliminar usuario</button>
        </form>

<?php
    }
}
?>