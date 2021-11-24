
<!-- html/ListadoPeliculas.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
 		 <?php include "style.css" ?>
 		
 		*{
      	padding: 0px;
      	margin: 0px;
    	}

	</style>
	<title>Inicio</title>
</head>
<body>
	<div id="menu">
    	<nav >
			<ul>
				<li>
					<?php  
					if(isset($_SESSION['logueado']) ){
						echo "<a class='but' id='nav' href='CerrarSesion'>Cerrar Sesión</a>";
					}else echo "<a class='but' id='nav' href='InicioSesion'>Iniciar Sesión</a> 
					
					<ul>
						<li>
							<a class='but' id='nav' href='InicioSesionEmpleado'>admin</a>
						</li>

					</ul> "?>
				</li>
				<li>
					<a class="but" id="nav" href="elegirComplejo">Comprar entradas</a>
				</li>
				<?php  
					if(isset($_SESSION['empleado']) ){ 
						echo "
								 <li>
										<a class='but' id='nav'> Menu empleado</a> 
									<ul>
										<li> 
											<a class='but' id='nav' href='AgregarPelicula'>agregar pelicula</a>
										</li>

										<li> 
											<a class='but' id='nav' href='AgregarFuncion'>agregar funcion</a>
										</li>
										
										<li> 
											<a class='but' id='nav' href='EliminarPelicula'>eliminar pelicula</a>
										</li>

										<li> 
											<a class='but' id='nav' href='EliminarFuncion'>eliminar funcion</a>
										</li>
									</ul>
								</li>
							";}
				?>
				</li>
			</ul>
		</nav>
  	</div>
  	
  	<br/><br/><br/><br/>

  	<div class="hti">
  		<h1>Oeste Cinema</h1>
  	</div>

	<br/><br/>

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

		<?php }  ?>
	</table>
	
</body>
</html>

