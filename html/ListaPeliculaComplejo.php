
<!-- html/ListaPeliculaComplejo.php --> 
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<style>
 		 <?php include "style.css" ?>
 		 <?php include "StyleCompra.css" ?>
		</style>
		<script  src="../html/js/jquery-3.6.0.js"  ></script>
		</style>
		<?php $lugar =$this->complejos  ?>
		<title>Listado de Peliculas en <?= $lugar[0]['ncomp'] ?>  X</title>
	</head>
	<body>
		<h1>Listado de Peliculas en <?= $lugar[0]['ncomp'] ?> </h1>
			<form action="" method="post">
				<div id="pelis">
					<table>
						<?php
						 foreach ($this->complejos as $c ) {  ?>
						 	<td>
							 	<div>
									<img src="images/<?= $c['imagen'] ?>">	
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

				<br/><br/><br/>

				<div class="sel" id="selPel">
				<label for="id_pelicula">Seleccione una película:</label>
				<select class="selPer" name="id_pelicula" id="selPer">
					<option>-</option>
				<?php foreach ($this->complejos as $p) {  ?>
					<option value="<?= $p['id_pelicula'] ?>">
						<?= $p['nombre'] ?>
					</option>

				<?php } ?>
				</select>
				</div>
					<input id="id_complejo" name="id_complejo" type="hidden" value="<?= $p['id_complejo'] ?>">

				<br/><br/>
			
				<div class="izq">
					<p><a class="but"href="inicio">VOLVER AL MENÚ</a></p>
				</div>

				<div class="der">	
					<p><input class="but" type="submit" value="CONTINUAR" /></p>
				</div>
				

				
			</form>
	</body>
	<script  src="../html/js/complejo.js" ></script>
</html>


