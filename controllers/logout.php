<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<doby>

<?php 
//remover all session variable
session_unset();

session_destroy();

header("Location: http://mc_construccion.test/index.php");

?>

</body>

</html>