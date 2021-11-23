
<!-- html/ListadoPeliculas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Nueva Funcion Pelicula</title>
</head>
<body>
	
	<form action="" method="post" >
		<div> 
			<p>Dia: <?= $_POST['dia']?></p> 
			<input type="hidden" name="dia" value="<?= $_POST['dia']?>">
			<p>hora: <?= $_POST['hora']?></p>
			<input type="hidden" name="hora" value="<?= $_POST['hora']?>">
			<p>Sala <?= $_POST['Sala']?></p>
			<input type="hidden" name="Sala" value="<?= $_POST['Sala']?>">
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