
<!-- html/EliminarPelicula.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Eliminar Pelicula</title>
</head>
<body>
	
	<form action="" method="post" >
		<h1>Elija la pelicula a eliminar</h1> 

		<div class="a1">
		<p><label for="pelicula">Pelicula:</label>
				<select name="pelicula">

					<?php
				foreach ($this->Peliculas as $p ) {
				 	?>
				 	<option value="<?= $p['id_pelicula'] ?>">
						
						<?= $p['nombre'] ?> 
					</option>
				<?php } ?>
					
				</select></p>
		</div>


		<div class="a1">
			<p><input class="but" type="submit" value="ELEGIR PELICULA" /></p>
		</div>
		
	</form>
	
</body>
</html>