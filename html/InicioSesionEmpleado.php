<!-- html/InicioSesionEmpleado.php -->
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Iniciar sesión (empleado)</title>
	<style type="text/css">
		<?php include "style.css" ?>
		div.a1{
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: Verdana;
			font-size: 20px;
		}

		#but, a{
	 		background-color: #2e518b;
	 		padding: 10px;
			color:white;
			font-size: 18px;
			text-decoration: none;
 		}

 		#but:hover, a:hover{
 			background-color: #74AEE4;
 		}

 		a{
 			margin-left: 40%;
 		}
	</style>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="a1">
			<h1>Inicio de sesión (solo empleados)</h1>
		</div>

		<div class="a1">
		<p><label for="nombre">Nombre de usuario:</label><input type="text" name="email"></p>
		</div>

		<div class="a1">
		<p><label for="contraseña">Contraseña:</label><input type="password" name="contraseña"></p>
		</div>

		<div class="a1">
		<input id="but" type="submit" value="Iniciar sesión">
		<a  href="../controllers/ListadoPeliculas.php">VOLVER AL MENÚ</a>
		</div>

	</form>

</body>

</html> 