<!-- html/InicioSesionEmpleado.php -->
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Iniciar sesión (empleado)</title>
	<style type="text/css">
		<?php include "style.css" ?>
	</style>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="a1">
			<h1>Inicio de sesión (solo empleados)</h1>
		</div>

		<div class="a1">
		<p><label for="nombre">Correo electrónico:</label><input type="text" name="email"></p>
		</div>

		<div class="a1">
		<p><label for="contraseña">Contraseña:</label><input type="password" name="contraseña"></p>
		</div>

		<div class="izq">
		<a class="but" href="inicio">VOLVER AL MENÚ</a>
		</div>
		<div class="der">	
		<input class="but" type="submit" value="INICIAR SESIÓN">
		</div>

	</form>

</body>

</html> 