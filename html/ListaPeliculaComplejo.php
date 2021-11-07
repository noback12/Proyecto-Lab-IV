
<!-- html/ListaPeliculaComplejo.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="Style.css" rel="stylesheet" type="text/css" />

	</style>
	<title>Listado de Peliculas en  X</title>
</head>
<body>
	<h1>Listado de Peliculas en complejo </h1>

		<table>
		<tr>
			
			<th>Nombre</th>
			
		</tr>

		

		<?php
		 foreach ($this->complejos as $p ) {  ?>
		 
			<tr>
				
				<td><?= $p['nombre'] ?></td>
				
			</tr>
		<?php } ?>
	</table>
	




	
</body>
</html>