
<!-- html agregarpelicula.php-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar pelicula</title>
</head>
<body>
	<h1>Agregar pelicula</h1>
	
	<form action="" method="post">

		<p><label for="nombre">nombre:</label><input type="text" name="nombre"></p>
		<p><label for="duracion">duracion:</label> <input type="text" name="duracion"></p>

		  <label for="duracion2">Duracion:</label>
		  <input type="time" id="duracion2" name="duracion2">
		 

		<p><label for="sinopsis">sinopsis:<input type="text" name="sinopsis"></p> 
		<p><label for="genero">genero:
			<select>
				<option value="1">
					accion
				</option>
				<option value="2">
					ciencia ficcion
				</option>
				<option value="3">
					terror
				</option>
				<option value="4">
					comedia
				</option>
			</select>
		</p>
		
		<input type="submit" value="enviar pago" />
	
	</form>
</body>
</html>
