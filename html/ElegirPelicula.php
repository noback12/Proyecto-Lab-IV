
<!-- html/ElegirPelicula.php --> 
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
		<div class="a1"> 
			<p>Dia: <?= $_POST['dia']?></p> 
			<input type="hidden" name="dia" value="<?= $_POST['dia']?>">
		</div>

		<div class="a1">
			<p>hora: <?= $_POST['hora']?></p>
			<input type="hidden" name="hora" value="<?= $_POST['hora']?>">
		</div>

		<div class="a1">
			<p>Sala <?= $_POST['Sala']?></p>
			<input type="hidden" name="Sala" value="<?= $_POST['Sala']?>">
		</div>  

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
			<input class="but" type="submit" value="ELEGIR PELÍCULA " />
		</div>
		
	</form>
	
</body>
</html>