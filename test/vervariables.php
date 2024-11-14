<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
if (isset ($_SESSION["usuario"])) {

    echo "Mi usuario es: " . $_SESSION["usuario"] . ".<br>";
    echo "Mi contrasena es: " . $_SESSION["contrasena"] . ".";
} else
{
    echo "no existe variable"
    echo "<br>"
}

?>

<br>PAGINA PARA VER VARIABLES</br>

<a href="http://mc_construccion.test/vervariables.php">Actualizar pagina </a>
<br></br>
<a href="http://mc_construccion.test/borrarvariables.php">limpia la variables</a>
</body>
</html>