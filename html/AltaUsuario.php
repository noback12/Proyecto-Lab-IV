
<!-- html AltaUsuario.php-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alta Usuario</title>
	<style type="text/css">
			<?php include "Style.css" ?>

			div.a1{
				display: flex;
				justify-content: center;
				align-items: center;
				font-family: Verdana;
				font-size: 20px;
			}

			#but{
	 			background-color: #2e518b;
	 			padding: 10px;
				color:white;
				font-size: 18px;
 			}

 			#but:hover{
 				background-color: #74AEE4;
 			}

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
		<p><label for="email">Email:</label><input type="text" name="email"></p> 
		</div>

		<div class="a1">
		<p><label for="contraseña">Contraseña:</label><input type="password" name="contraseña"></p> 
		</div>

		<div class="a1">
		<input id="but" type="submit" value="Crear usuario" /></p>
		</div>
	</form>
</body>
</html>
