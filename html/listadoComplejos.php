
<!-- html/ListadoComplejos.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado Complejos</title>
</head>
<body>
	<h1>Listado de Complejos</h1>

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
		 foreach ($this->complejos as $c ) {  ?>
		 
			<tr>
				<td><?= $c['id_complejo'] ?></td>
				<td><?= $c['direccion'] ?></td>
				<td><?= $c['nombre'] ?></td>
				<td><?= $c['precio'] ?></td>
				<td><?= $c['cant_salas'] ?></td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html>