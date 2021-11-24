
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
		<div> 
			Elija la pelicula a eliminar
		</div>  
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



		<input type="submit" value="Elegir pelicula " />
		
	</form>
	
</body>
</html>