
//html agregarpelicula.php

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Peliculas</title>
</head>
<body>

	<h1>Listado de Peliculas</h1>


	<table>
		<tr><th>Id</th><th>Nombre</th></tr>

		<?php foreach($this->peliculas as $p) { ?>
		<tr><td><?= $p['id_pelicula'] ?></td> <td><?= $p['nombre'] ?></td></tr>
		<?php } ?>

	</table>
</body>
</html>

