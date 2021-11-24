
<!-- html/EliminarPelicula.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Eliminar Funcion</title>
</head>
<body>
	
	<form action="" method="post" >
		<div> 
			Elija la funcion a eliminar
		</div>  
		<p><label for="funcion">Pelicula:</label>
				<select name="funcion">

					<?php
				foreach ($this->Funciones as $f ) {
				 	?>
				 	<option value="<?= $f['id_funcion'] ?>">
						
						<?= $f['nombre'] ?> , <?= $f['dia'] ?> , <?= $f['hora'] ?> , Sala <?= $f['numero'] ?> , <?= $f['complejo'] ?>     
					</option>
				<?php } ?>
					
				</select></p>



		<input type="submit" value="Elegir funcion " />
		
	</form>
	
</body>
</html>