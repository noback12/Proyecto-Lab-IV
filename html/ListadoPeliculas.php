
<!-- html/ListadoPeliculas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- no funciona <link href="Style.css" rel="stylesheet" type="text/css" />-->
	<style>
		h1{
		font-size: 65px;
		text-align: center;
		text-shadow: 0px 0px 10px #6073bf;
		}

		table, th, td {
		  border: 1px solid black;
		}
	</style>
	<title>Listado Peliculas</title>
</head>
<body>
	<h1>Listado de Peliculas</h1>

	<table>
		<tr>
			<th>ID</th>
			<th>Direccion</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Cantidad de Salas</th>
		</tr>

		<?php
		//"this->complejos es el $complejos del view que se copia y pega en render
		 foreach ($this->Peliculas as $p ) {  ?>
		 
			<tr>
				<td><?= $p['id_pelicula'] ?></td>
				<td><?= $p['nombre'] ?></td>
				<td><?= $p['duracion'] ?></td>
				<td><?= $p['sinopsis'] ?></td>
				<td><?= $p['genero'] ?></td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html>