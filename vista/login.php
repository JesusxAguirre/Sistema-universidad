<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.6">
	<link rel="Shortcut Icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/iniciar-sesion.css">

	<script type="text/javascript" src="js/validaciones.js"></script> <!-- Para validar los formularios con js -->
</head>
<body>
	<div class="fondo">
		<div class="carta"> <!-- Carta de Inicio de Sesión -->
			<!-- Lado Izquierdo -->
			<div class="cuerpo">
				<img src="img/logo-uptaeb2.png"> <!-- Logo esquina -->
				<span class="sicu-text">UPTAEB</span>

				<span class="login-text">INICIAR SESIÓN</span>

				<form class="formulario" action="" method="post" onsubmit="return validar()"> <!-- Formulario -->
					<span>CORREO ELECTRÓNICO</span>
					<input type="email" name="correo" placeholder="tucorreo@email.com" autofocus="on" required>

					<span>CONTRASEÑA</span>
					<input type="password" name="clave" placeholder="* * * * * * * * * * *">

					<input type="submit" value="INGRESAR" required>
				</form>
			</div>

			<!-- Lado Derecho -->
			<div class="logo-derecha">
				<span class="bienvenido">BIENVENIDO A SICU</span>
				<div class="logo">
					<img src="img/logo-uptaeb.png"> <!-- Logo central -->
				</div>
				<span>Sistema Interno de la Dirección de Cultura</span>
			</div>
		</div>
	</div>
	<?php if (isset($msjOperacion)) { echo $msjOperacion;} ?>
</body>
</html>