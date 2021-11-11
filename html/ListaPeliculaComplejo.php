
<!-- html/ListaPeliculaComplejo.php --> 
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="Style.css" rel="stylesheet" type="text/css" />
		<script  src="js/jquery-3.6.0.js"  ></script>
		</style>
		<title>Listado de Peliculas en  X</title>
	</head>
	<body>
		<h1>Listado de Peliculas en complejo </h1>
			<form action="" method="post">
				<select name="id_pelicula">
				<?php foreach ($this->complejos as $p) {  ?>
					<option value="<?= $p['id_pelicula'] ?>">
						<?= $p['nombre'] ?>
					</option>
				<?php } ?>
					<input id="id_complejo" name="id_complejo" type="hidden" value="<?= $p['id_complejo'] ?>">
				<p><input type="submit" value="Elegir Pelicula" /></p>
			</form>
	</body>

	<script  src="js/complejo.js" ></script>
</html>

