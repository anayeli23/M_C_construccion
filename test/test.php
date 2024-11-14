<?php

// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["usuario"] = "ana";
$_SESSION["contrasena"] = "fiis";
echo "las variables han sido almacenadas....";
?>

<br></br>

<a href="http://mc_construccion.test/vervariables.php">ir a ver las variables</a>
</body>
</html>