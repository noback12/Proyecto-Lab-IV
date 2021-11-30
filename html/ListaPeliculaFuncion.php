
<!-- html/ListaPeliculaFuncion.php --> 
<!-- en escencia es lo mismo que listaPeliculaComplejo pero con sus horarios -->
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<style>
 		 	<?php include "style.css" ?>
		</style>
		<script  src="html/js/jquery-3.6.0.js"  ></script>
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
									<img src="images/<?= $peliculaElegida['imagen'] ?>">
									<p>
										<?= $peliculaElegida['sinopsis'] ?>
									</p>
									<p>
										<?= "Genero:". $peliculaElegida['genero'] ?>
									</p>
									<p>
										<?="Estreno original: ". $peliculaElegida['estreno'] ?>
									</p>
								</div>
							</td>					
					</table>
				</div>

				<br/><br/>

			<form action="SeleccionarAsientos" method="post">
				<div class="sel" id="selFun">
				<label for="id_funcion">Seleccione una función:</label>
				<select class="selPer" name="id_funcion">
				<?php foreach ($this->complejos as $p) {  ?>
					<option value="<?= $p['id_funcion'] ?>">
						<?= $p['dia'] ?> <?= $p['hora'] ?> 
					</option>
				<?php } ?>
				</select>
				</div>

				<br/><br/>
				<div class="izq">
					<p><a class="but" id="but2" href="inicio">VOLVER AL MENÚ</a></p>
				</div>

				<div class="der">	
					<p><input class="but" type="submit" value="ELEGIR FUNCIÓN" /></p>
				</div>
			</form>
	</body>

	<script  src="html/js/complejo.js" ></script>
</html>