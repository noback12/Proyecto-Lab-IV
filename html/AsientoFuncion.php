
<!-- html/AsientoFuncion.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Asiento Funcion</title>
</head>
<body>
	<h1>Asiento Funcion</h1>

	<table>
		<?php
		 foreach ($this->Salas as $a ) {  ?>
			<tr>
				
				<th>id Asiento</th>
				<th>id af</th>
				<th>estado</th>
				<th>letra</th>
			</tr>
		 
			<tr>
				
				<td><?= $a['id_asiento'] ?></td>
				<td><?= $a['id_af'] ?></td>
				<td class="estado"><?= $a['ocupado'] ?></td>
				<td><?= $a['letra'] ?></td>

			</tr>
		<?php } ?>
	</table>
	
</body>
</html>