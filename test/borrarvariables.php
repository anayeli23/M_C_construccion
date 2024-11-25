<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>

    se borraron todas las variables
    </br>
    <a href="http://mc_construccion.test/vervariables.php">Ver variables</a>
    <br></br>
    <a href="http://mc_construccion.test/test.php">volver a grabar Variables</a>

</body>

</html>