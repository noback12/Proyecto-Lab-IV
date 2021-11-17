
<!-- html/AsientoFuncion.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<script  src="../html/js/jquery-3.6.0.js"  ></script>
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Asiento Funcion</title>
</head>
<body>
	<h1>Asiento Funcion</h1>
	<form action="" method="post">
		<div id="asientos">
			<?php
			$asientos = $this->Salas ;
			//Tengo un auxiliar para comparar
			$aux = "-1";

			foreach ($asientos as $key => $fila) {
				if($fila['letra'] != $aux){
					echo "<BR>".$fila["letra"];
					$aux = $fila["letra"];
				}	 	
			 	if($fila["ocupado"] != "1"){ ?>
						<label class="cbox_disponible"><input type="checkbox"  value="Disponible"> Disponible</label>
		<?php 	}else{  ?>	
						<label class="cbox_ocupado" > Ocupado </label>
		<?php
				}

			 } ?>
		</div>
		<input type="submit" value="Reservar" />
	</form>
	<script  src="../html/js/complejo.js" ></script>
</body>
</html>