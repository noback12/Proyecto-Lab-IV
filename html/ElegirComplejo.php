
<!-- html ElegirComplejo.php-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Elegir Complejo</title>
	<style>
 		 <?php include "Style.css" ?>
	</style>
</head>
<body>
	<h1>Elegir Complejo</h1>
	<table>
			<tr>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Precio</th>
				<th>Cantidad de Salas</th>
			</tr>
			<?php
			foreach ($this->complejos as $c ) {  ?> 
				<tr>
					<td><?= $c['nombre'] ?></td>
					<td><?= $c['direccion'] ?></td>
					<td>$<?= $c['precio'] ?></td>
					<td><?= $c['cant_salas'] ?></td>
				</tr>
			<?php } ?>
		</table>
	
	<form action="" method="post">
		<label for="id_complejo">Complejo:</label>
		<select name="id_complejo">
			<?php foreach ($this->complejos as $c ) {  ?>
				<option value="<?= $c['id_complejo'] ?>">
					<?= $c['nombre'] ?>
				</option>
			<?php } ?>
		</select>					
		<p><input type="submit" value="Elegir Complejo" /></p>
	</form>
</body>
</html>