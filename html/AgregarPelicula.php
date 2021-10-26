
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
		<!--<p><label for="duracion">duracion:</label> <input type="text" name="duracion"></p>-->

		<p><label for="duracion">Duracion:</label><input type="time" value="00:01" name="duracion"></p>
		 

		<p><label for="sinopsis">sinopsis:</label><input type="text" name="sinopsis"></p> 
		<p><label for="genero">genero:</label>
			<select name="genero">
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
		</p><label for="estreno">Estreno:</label><input type="date" id="esterno" name="estreno"
	    	value="<?php echo date('Y-m-d'); ?>" 
	    	min="2000-01-01" />

		<p>
		<input type="submit" value="Agregar Pelicula" />
		</p>
	</form>
</body>
</html>
