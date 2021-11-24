
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
	<h1>Complejos Disponibles</h1>
	
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
	

		<br/><br/><br/>

	<form action="listaPeliculasEnComplejo" method="post">
		<div class="sel" id="selCom">
			<label for="id_complejo">Complejo:</label>
			<select class="selPer" name="id_complejo">
				<?php foreach ($this->complejos as $c ) {  ?>
					<option value="<?= $c['id_complejo'] ?>">
						<?= $c['nombre'] ?>
					</option>
				<?php } ?>
			</select>
		</div>

		<br/><br/><br/><br/>

		<div class="izq">
			<p><a class="but" href="inicio">VOLVER AL MENÚ</a></p>
		</div>

		<div class="der">
			<p><input class="but" type="submit" value="ELEGIR COMPLEJO" /></p>
		</div>

		
	
	</form>
</body>
</html>