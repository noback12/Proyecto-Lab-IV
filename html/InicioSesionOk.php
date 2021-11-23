<!-- html/InicioSesionOk.php --> 
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Iniciar sesión</title>
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

 		#emp{
 			margin-left: 40%;
 		}
	</style>
</head>

<body>
	<h1>Incio exitoso</h1>

	<?php
		 foreach ($this->Usuarios as $p ) {  ?>
		 
			<tr>
				<td><?= $p['nombre'] ?></td>
				<td><?= $p['apellido'] ?></td>
			</tr>
		<?php } ?>
</body>

</html>