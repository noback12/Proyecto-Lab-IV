
<!-- html/ListadoSalas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="Style.css" rel="stylesheet" type="text/css" />

	</style>
	<title>Listado Salas</title>
</head>
<body>
	<h1>Listado de Salas</h1>

	<table>
		<tr>
			<th>ID</th>
			<th>Numero</th>
			<th>Capacidad</th>
			<th>id_complejo</th>
		</tr>

		<?php
		//"this->complejos es el $complejos del view que se copia y pega en render
		 foreach ($this->Salas as $p ) {  ?>
		 
			<tr>
				<td><?= $p['id_sala'] ?></td>
				<td><?= $p['numero'] ?></td>
				<td><?= $p['capacidad'] ?></td>
				<td><?= $p['id_complejo'] ?></td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html>