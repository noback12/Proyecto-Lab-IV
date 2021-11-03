
<!-- html/ListadoPeliculas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<!-- No me funcionaba
		<link href="Style.css" rel="stylesheet" type="text/css" />-->

	<!--<style>
		body{ 
			background-color: #bfbfbf;
			}

		h1{
		font-size: 65px;
		text-align: center;
		text-shadow: 0px 0px 10px #6073bf;
		}

		table, th, td {
		  border: 1px solid black;
		}-->
	</style>
	<title>Listado Peliculas</title>
</head>
<body>
	<h1>Listado de Peliculas</h1>

	<table>
		<tr>
			
			<th>Nombre</th>
			<th>Duracion</th>
			<th>Sinopsis</th>
			<th>Genero</th>
			<th>Estreno</th>
		</tr>

		<?php
		 foreach ($this->Peliculas as $p ) {  ?>
		 
			<tr>
				
				<td><?= $p['nombre'] ?></td>
				<td><?= $p['duracion'] ?></td>
				<td><?= $p['sinopsis'] ?></td>
				<td><?= $p['genero'] ?></td>
				<td><?= $p['estreno'] ?></td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html>