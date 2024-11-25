<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
// require_once $_SERVER['DOCUMENT_ROOT']. '/models/conexion.php';

session_start();


if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

$conexion = new conexion();
$pdo = $conexion->obtenerConexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuario = $_POST["datusuario"];


    $conexion = new conexion();
    $pdo = $conexion->obtenerConexion();


    if (isset($_POST["custId"])) {
        //aplicar el update a la DB
        try {
            $sentencia = $pdo->prepare("update usuarios set username=?, password=?, perfil=? where id=?;");
            $sentencia->execute([$_POST["datusuario"], $_POST["datpassword"], $_POST["datperfil"], $_POST["custId"]]);
            echo $tmpdatusuario . "  modificacion con exito <br>";
            exit();
        } catch (PDOException $e) {
            echo "hubo un error no se pudo modificar...<br>";
            echo $e->getMessage();
            exit();
        }
    } else {
        $query = $pdo->query("select id,username,password,perfil from usuarios where username='" . $tmpdatusuario . "'");
        //$query->execute([$tmpdatusuario]);
        $fila  = $query->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
            // Mostrar el formulario para modificar el usuario
            ?>
        <form action="" method="POST">
            <input type="hidden" id="custId" name="custId" value="<?php echo $fila['id'] ?>">

            <label for="datusuario">Usuario</label>
            <input type="text" name="datusuario" id="datusuario" value="<?php echo $fila['username'] ?>">
            <br>
            <label for="datpasword">password</label>
            <input type="password" name="datpassword" id="datpassword" value="<?php echo $fila['password'] ?>">
            <br>
            <label for="datperfil">usuario</label>
            <input type="text" name="datperfil" id="datperfil" value="<?php echo $fila['perfil'] ?>">
            <br>
            <button type="submit">Modificar usuario</button>
        </form>
<?php
    }else {
        echo "No se encontró un usuario con ese nombre.<br>";
    }
    exit();
}

}
?>

<form action="" method="POST">
    <label for="">Que usuario deseas modificar</label>
    <input type="text" name="datusuario" id="datusuario">
    <br>
    <button type="submit">Buscar usuario</button>
</form>