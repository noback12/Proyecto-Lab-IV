
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
			
			<th>Nombre</th>
			<th>Duracion</th>
			<th class="sinopsis">Sinopsis</th>
			<th>Genero</th>
			<th>Estreno</th>
			<th>imagen</th>
		</tr>

		<?php
		 foreach ($this->Peliculas as $p ) {  ?>
		 
			<tr>
				
				<td><?= $p['nombre'] ?></td>
				<td><?= $p['duracion'] ?></td>
				<td class="sinopsis"><?= $p['sinopsis'] ?></td>
				<td><?= $p['genero'] ?></td>
				<td><?= $p['estreno'] ?></td>
				<td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($p['imagen']); ?>" height='500px' width='350px'></td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html>