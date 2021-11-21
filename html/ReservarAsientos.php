
<!-- html/ListadoPeliculas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Listado Peliculas</title>
</head>
<body>
	<h1>Listado de Peliculas</h1>

	<table>
		<tr>
			<th>ID AS_Fun</th>
		</tr>

		<?php
		 foreach ($this->Funciones as $f ) {  ?>
		 
			<tr>
				<td><?= $f['id_af'] ?></td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html>