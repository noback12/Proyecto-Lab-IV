
<!-- html AltaUsuario.php-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alta Usuario</title>
	<style type="text/css">
			<?php include "Style.css" ?>
	</style>
</head>
<body>
	<h1>Crear Usuario</h1>
	
	<form action="" method="post" enctype="multipart/form-data">
		<div class="a1">
		<p><label for="nombre">Nombre:</label><input type="text" name="nombre"></p>
		<!--<p><label for="duracion">duracion:</label> <input type="text" name="duracion"></p>-->
		</div>

		<div class="a1">
		<p><label for="apellido">Apellido:</label><input type="text" name="apellido"></p>
		</div>

		<div class="a1">
		<p><label for="email">Email:</label><input type="email" name="email"></p> 
		</div>

		<div class="a1">
		<p><label for="contraseña">Contraseña:</label><input type="password" name="contraseña"></p> 
		</div>

		<div class="izq">
		<a class="but" id="but2" href="inicio">VOLVER AL MENÚ</a>
		</div>
		<div class="der">	
		<input class="but" type="submit" value="CREAR USUARIO" /></p>
		</div>
	</form>
</body>
</html>
