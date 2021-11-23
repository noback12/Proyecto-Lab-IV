
<!-- html/ListaPeliculaFuncion.php --> 
<!-- en escencia es lo mismo que listaPeliculaComplejo pero con sus horarios -->
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<style>
 		 <?php include "style.css" ?>
	</style>
		<script  src="js/jquery-3.6.0.js"  ></script>
		</style>
		<title>ListaPeliculaFuncion  X</title>
	</head>
	<body>
		<?php
			$peliculaElegida = $this->complejos["0"]; 
		  ?>
		<h1>Elegir funcion para <?= $peliculaElegida['nombre'] ?> </h1>

			<div id="pelis">
					<table>
						
						 	<td>
							 	<div>
									<td><img src="../images/<?= $peliculaElegida['imagen'] ?>">
									<p>
										<?= $peliculaElegida['sinopsis'] ?>
									</p>
									<p>
										<?= "Genero:". $peliculaElegida['genero'] ?>
									</p>
									<p>
										<?="Estreno original: ". $peliculaElegida['estreno'] ?>
									</p>
									<p>
										<?= "trailer?" ?>
									</p>
								</div>
							</td>					
					</table>
				</div>

			<form action="http://localhost:8080/lab%20IV/Proyecto-Lab-IV/Proyecto-Lab-IV/controllers/SeleccionarAsientos.php" method="post">
				<select name="id_funcion">
				<?php foreach ($this->complejos as $p) {  ?>
					<option value="<?= $p['id_funcion'] ?>">
						<?= $p['dia'] ?> <?= $p['hora'] ?> 
					</option>
				<?php } ?>
				<p><input type="submit" value="Elegir Funcion" /></p>
			</form>
	</body>

	<script  src="js/complejo.js" ></script>
</html>