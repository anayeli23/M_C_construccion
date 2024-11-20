<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

session_start();
?>
<!DOCTYPE html>
<html>
<doby>

<?php 
//remover all session variable
session_unset();

session_destroy();

header('Location:'.get_urlBase('index.php'));
?>

</body>

</html>