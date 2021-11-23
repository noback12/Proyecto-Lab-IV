
<!-- html AgregarFuncion.php-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Funcion</title>
</head>
<body>
	<h1>Agregar Funcion</h1>
	
	<form action="" method="post" >

		<p><label for="dia">Dia:</label><input type="date" name="dia" value="<?php echo date('Y-m-d'); ?>" ></p>
		<!--<p><label for="duracion">duracion:</label> <input type="text" name="duracion"></p>-->

		<p><label for="hora">Hora inicio:</label><input type="time" value="00:01" name="hora"></p>
		 
		<p><label for="Sala">Sala:</label>
			<select name="Sala">

				<?php
			$cantEntradas = 0;
			foreach ($this->Funciones as $f ) {
			 	?>
			 	<option value="<?= $f['id_sala'] ?>">
					Sala: <?= $f['numero'] ?> - <?= $f['nombre'] ?>
				</option>
			<?php } ?>
				
			</select></p>


		
		<input type="submit" value="Agregar Funcion" />
		
	</form>
</body>
</html>
