
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
	<div id="menu">
    	<ul>
    		<li><a href="../controllers/InicioSesion.php">INICIAR SESIÓN</a></li>

  		</ul>

  		<br/><br/>
  	</div>
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
				<td><img src="../images/<?= $p['imagen'] ?>"></td>

			</tr>
		<?php } ?>
	</table>
	
</body>
</html>