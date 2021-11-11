
<!-- html/ListaPeliculaFuncion.php --> 
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="Style.css" rel="stylesheet" type="text/css" />
		<script  src="js/jquery-3.6.0.js"  ></script>
		</style>
		<title>ListaPeliculaFuncion  X</title>
	</head>
	<body>
		<h1>ListaPeliculaFuncion </h1>
			<form action="" method="post">
				<select name="id_pelicula">
				<?php foreach ($this->complejos as $p) {  ?>
					<option value="<?= $p['id_funcion'] ?>">
						<?= $p['dia'] ?> <?= $p['hora'] ?> 
					</option>
				<?php } ?>
				<p><input type="submit" value="Elegir Pelicula" /></p>
			</form>
	</body>

	<script  src="js/complejo.js" ></script>
</html>