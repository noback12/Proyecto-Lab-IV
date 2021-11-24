<!-- html/InicioSesion.php --> 
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Iniciar sesión</title>
	<style type="text/css">
		<?php include "style.css" ?>

	</style>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">

		<div class="a1">
			<h1>Inicio de sesión</h1>
		</div>

		<div class="contenedor">
		<div class="cartel">
			<h3>Debe iniciar sesión o registrarse para poder acceder a la compra de entradas</h3>
		</div></div>

		<div class="a1">
		<p><label for="nombre">Correo electrónico:</label><input type="text" name="email"></p>
		</div>

		<div class="a1">
		<p><label for="contraseña">Contraseña:</label><input type="password" name="contraseña"></p>
		</div>

		<div class="izq">
		<a class ="but" href="AltaUsuario">REGISTRARSE</a>
		</div>
		<div class="der">
		<input class="but" type="submit" value="INICIAR SESIÓN">

		</div>

		<br/><br/><br/><br/>

		<p><a class="but" id="nav" href="inicio">VOLVER AL MENÚ</a></p>

	</form>

</body>

</html>