
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
<<<<<<< Updated upstream
		<p><label for="duracion">duracion:</label> <input type="text" name="duracion"></p>

		  <label for="duracion2">Duracion:</label>
		  <input type="time" id="duracion2" name="duracion2">
		 

		<p><label for="sinopsis">sinopsis:<input type="text" name="sinopsis"></p> 
		<p><label for="genero">genero:
			<select>
				<option value="1">
					accion
=======

		  <label for="duracion">Duracion:</label>
		  <input type="time" value="00:01" id="duracion" name="duracion">
		 

		<p><label for="sinopsis">sinopsis:</label><input type="text" name="sinopsis"></p> 
		<p><label for="genero">genero:</label>
			<select name="genero">
				<option value="accion">
					Accion
>>>>>>> Stashed changes
				</option>
				<option value="ciencia ficcion">
					Ciencia Ficcion
				</option>
				<option value="terror">
					Terror
				</option>
				<option value="comedia">
					Comedia
				</option>
				<option value="belica">
					Belica
				</option>
				<option value="musical">
					Musical
				</option>
				<option value="drama">
					Drama				
				</option>
				<option value="documental">
					Documental
				</option>
			</select>
		</p>
		
		<input type="submit" value="enviar pago" />
	
	</form>
</body>
</html>
