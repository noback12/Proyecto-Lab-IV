
<!-- html agregarpelicula.php-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		<?php include "style.css" ?>
	</style>
	<title>Agregar pelicula</title>
</head>
<body>
	<h1>Agregar pelicula</h1>
	
	<form action="" method="post" enctype="multipart/form-data">

		<div class="a1">
		<p><label for="nombre">Nombre:</label><input type="text" name="nombre"></p>
		</div>

		<div class="a1">
		<p><label for="duracion">Duracion:</label><input type="time" value="00:01" name="duracion"></p>
		</div>

		<div class="a1">
		<p><label for="sinopsis">Sinopsis:</label><input type="text" name="sinopsis"></p>
		</div>

		<div class="a1">
		<p><label for="genero">Género:</label></p>
			<select name="genero">
				<option value="accion">
					Accion
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
				<option value="fantasia">
					Fantasia
				</option>
			</select>
		</div>

		<div class="a1">
		<p><label for="estreno">Estreno:</label></p>
		<input type="date" id="esterno" name="estreno"
	    	value="<?php echo date('Y-m-d'); ?>" 
	    	  min="1895-03-22"/>
		</div>

		<div class="a1">
		<p><label for="imagen">URL Imagen:</label><input type="text" id="imagen" name="imagen">(JPEG o PNG)</p>
		</div>

		<div class="a1">
			<div class="izq">
				<p><a class="but" id="nav" href="inicio">VOLVER AL MENÚ</a></p>
			</div>
		<input class="but" type="submit" value="AGREGAR PELICULA" /></p>
		</div>


	
	</form>
</body>
</html>
