
<!-- html AgregarFuncion.php-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		<?php include "style.css" ?>
	</style>
	<title>Agregar Funcion</title>
</head>
<body>
	<h1>Agregar Funcion</h1>
	
	<form action="" method="post" >

		<div class="a1">
			<p><label for="dia">Dia:</label><input type="date" name="dia" value="<?php echo date('Y-m-d'); ?>" ></p>
		</div>

		<div class="a1">
			<p><label for="hora">Hora inicio:</label><input type="time" value="00:01" name="hora"></p>
		</div>
		 
		<div class="a1">
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
		</div>

		
		<div class="a1">
			<div class="izq">
				<p><a class="but" id="nav" href="inicio">VOLVER AL MENÚ</a></p>
			</div>
			<input class="but" type="submit" value="AGREGAR FUNCIÓN" />
		</div>

		
	</form>
</body>
</html>
