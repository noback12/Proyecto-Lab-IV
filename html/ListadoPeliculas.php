
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
					<?php  
					if(isset($_SESSION['logueado']) ){
						echo "<a href='CerrarSesion'>Cerrar SESIÓN</a>";
					}else echo "<a href='InicioSesion'>INICIAR SESIÓN</a> 
					
					<ul>
						<li>
							<a href='../controllers/AltaUsuario.php' target='_blank'>Crear usuario</a>
						</li>

					</ul> "?>
				</li>
				<li>
					<a href="asd" target="_blank">item 2</a>
					<ul>
						<li>
							<a href="asd" target="_blank">Item 2.1</a>
						</li>
						

					</ul>
				</li>
				<?php  
					if(isset($_SESSION['empleado']) ){ 
						echo "
								 <li>
										<a href='' target=_'blank'> Menu empleado</a> 
									<ul>
										<li> 
											<a href='http://localhost:8080/lab%20IV/Proyecto-Lab-IV/Proyecto-lab-IV/controllers/AgregarPelicula.php' target='_blank'>agregar pelicula</a>
										</li>
										<li> 
											<a href='asd' target='_blank'>agregar funcion</a>
										</li>
									</ul>
								</li>
							";}
				?>
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
				<td><img src="images/<?= $p['imagen'] ?>"></td>

			</tr>
		<?php } ?>
	</table>
	
</body>
</html>