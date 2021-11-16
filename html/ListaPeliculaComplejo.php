
<!-- html/ListaPeliculaComplejo.php --> 
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<style>
 		 <?php include "style.css" ?>
		</style>
		<script  src="../html/js/jquery-3.6.0.js"  ></script>
		
		</style>
		<title>Listado de Peliculas en  X</title>
	</head>
	<body>
		<h1>Listado de Peliculas en complejo </h1>
			<form action="" method="post">
				<div id="pelis">
					<table>
					
						<?php
						//"this->complejos es el $complejos del view que se copia y pega en render
						 foreach ($this->complejos as $c ) {  ?>
						 	<td>
							 	<div>
									<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($c['imagen']); ?>" height='500px' width='350px'>
										
									<p>
										<?= $c['id_pelicula'] ?>
									</p>
									<p>
										<?= $c['nombre'] ?>
									</p>
									<p>
										<?= $c['sinopsis'] ?>
									</p>
								</div>
							</td>

						<?php } ?>
					</table>
				</div>
				
				<select name="id_pelicula" id="id_pelicula">
					<option>-</option>
				<?php foreach ($this->complejos as $p) {  ?>
					<option value="<?= $p['id_pelicula'] ?>">
						<?= $p['nombre'] ?>
					</option>

				<?php } ?>
					<input id="id_complejo" name="id_complejo" type="hidden" value="<?= $p['id_complejo'] ?>">

				<p><input type="submit" value="Elegir Pelicula" /></p>
			</form>

	</body>

	<script  src="../html/js/complejo.js" ></script>
</html>


