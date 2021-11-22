
<!-- html/ListadoPeliculas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Reservar Asientos</title>
</head>
<body>
	<h1>Reservar Asientos</h1>

	<table>
		<tr>
			<th>ID AS_Fun</th>
		</tr>

		<?php
		$cantEntradas = 0;
		 foreach ($this->Funciones as $f ) 
		 {  
		 	$cantEntradas ++;
		 	?>
		 
			<tr>
				<td><?= $f['id_af'] ?></td>

			</tr>
		<?php } ?>
	</table>

	<div>
		<?= $cantEntradas ?> ENTRADAS = $ 
	</div>
</body>
</html>