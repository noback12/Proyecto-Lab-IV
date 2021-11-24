
<!-- html/ListaFunciones.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		<?php include "style.css" ?>
	</style>
	<title>Listado de Funciones</title>
</head>
<body>
	<h1>Listado de Funciones</h1>

	<table>
		<tr>
			
			<th>id_funcion</th>
			<th>dia</th>
			<th >hora</th>
			<th>id_sala</th>
			<th>id_pelicula</th>
		</tr>

		<?php
		 foreach ($this->Funciones as $f ) {  ?>
		 
			<tr>
				
				<td><?= $f['id_funcion'] ?></td>
				<td><?= $f['dia'] ?></td>
				<td><?= $f['hora'] ?></td>
				<td><?= $f['id_sala'] ?></td>
				<td><?= $f['id_pelicula'] ?></td>
				
			</tr>
		<?php } ?>
	</table>

	<a href="inicio">Volver</a>
	
</body>
</html>