<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>document</title>
	<link rel="stylesheet" href="<?php echo get_urlBase('css/styles.css') ?>">
</head>

<body class="container" style="background: url('/img/fondo.png') no-repeat center center">>
	<div class="container" style="background: url('/img/imgLogin.png') no-repeat center center fixed">
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

			<form action="/controllers/controladorLogin.php" method="POST" class="login-form">
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