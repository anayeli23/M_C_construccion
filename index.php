<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background: url('fondo.png') no-repeat center center fixed">
<?php
// Start the session
session_start();

	if ( $_SERVER["REQUEST_METHOD"] == "POST") {
		$v_username="";
		$v_password="";

		if(isset( $_POST["txtusername"] )){
			$v_username = $_POST["txtusername"];
		}
		if(isset($_POST["txtpassword"])){
			$v_password = $_POST["txtpassword"];
		}

		if(($v_username == "admin") && ($v_password == "1234") ){
			$_SESSION["txtusername"] = $v_username;
			$_SESSION["txtpassword"] = $v_password;
			header("Location: http://mc_construccion.test/dashboard.php");
		}else {
			header("Location: http://mc_construccion.test/claveequivocada.php");
		}

	}
?>
<div class="container" style="background: url('imgLogin.png') no-repeat center center fixed">
	<div class="cloud-title">
		<div class="cloud-title-small"></div>
		<div class="cloud-title-small right"></div>
		<div class="cloud-title-small left"></div>
		<h2 class="cloud-title-text">Login</h2>
	</div>
	<div class="cloud">
		<div class="cloud-small"></div>
		<div class="cloud-small right"></div>
		<div class="cloud-small left"></div>       
		<div class="dona"></div>
	</div>
	<div class="cloud1">
		<div class="cloud-small"></div>
		<div class="cloud-small right"></div>
		<div class="cloud-small left"></div>       
		<div class="dona"></div>
	</div>
    <div class="login-container">

        <form class="login-form" action="" method="POST">
            <div class="input-group">
                <label for="txtusername">Username</label>
                <input type="text" name="txtusername" id="txtusername" placeholder="username">
            </div>
            <div class="input-group">
                <label for="txtpassword">Password</label>
                <input type="txtpassword" name="txtpassword" id="txtpassword" placeholder="password">
            </div>        
        	<button type="button" class="boton-remember">REMEMBER</button>
        	<button type="submit" name="buttonLogin" class="login-button">LOGIN</button>
        </form>
        <p class="register-link">REGISTRATIONE</p>
    </div>
		<div class="cloud2">
		<div class="cloud-small"></div>
		<div class="cloud-small right"></div>
		<div class="cloud-small left"></div> 
	</div>
	<div class="cloud3">
		<div class="cloud-small"></div>
		<div class="cloud-small right"></div>
		<div class="cloud-small left"></div> 
	</div>
	<div class="circle1">
		<div class="cloud-small"></div>
	</div>
	<div class="circle2">
		<div class="cloud-small"></div>
		<div class="imagen" style="background: url('llave.png') no-repeat center center fixed"></div>

    </div>
	</div>
</body>
</html>