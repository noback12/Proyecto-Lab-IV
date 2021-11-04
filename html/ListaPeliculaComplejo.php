
<!-- html/ListaPeliculaComplejo.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="Style.css" rel="stylesheet" type="text/css" />

	</style>
	<title>Listado de Peliculas en  X</title>
</head>
<body>
	<h1>Listado de Peliculas en complejo </h1>

		<table>
		<tr>
			
			<th>Nombre</th>
			<th>Duracion</th>
			<th>Sinopsis</th>
			<th>Genero</th>
			<th>Estreno</th>
		</tr>

		

		<?php
		 foreach ($this->complejos as $p ) {  ?>
		 
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