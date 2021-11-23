
<!-- html/ListadoPeliculas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Inicio</title>
</head>
<body>

	<h1>Inicio</h1>
	<div id="menu">
    	<nav >
			<ul>
				<li>
					<a href="../controllers/InicioSesion.php">INICIAR SESIÓN</a>
					<ul>
						<li>
							<a href="asd" target="_blank">Item 1.1</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="asd" target="_blank">item 2</a>
					<ul>
						<li>
							<a href="asd" target="_blank">Item 2.1</a>
						</li>
						

					</ul>
				</li>
				<li>
					<a href="asd" target="_blank">Item 3</a>
					<ul>
						<li>
							<a href="asd" target="_blank">Item 3.1</a>
						</li>
	

					</ul>
				</li>
			</ul>
		</nav>
  	</div>
	
	<br><br><br>


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