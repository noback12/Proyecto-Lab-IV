
<!-- html/AsientoFuncion.php --> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<script  src="html/js/jquery-3.6.0.js"  ></script>
	<style>
 		 <?php include "style.css" ?>
	</style>
	<title>Asiento Funcion</title>
</head>
<body>
	<h1>Asiento Funcion</h1>
	<form action="ReservarAsientos" method="post">

		<div id="asientos">
			<div class="title-blk">
                  <h2>PANTALLA</h2>
            </div>

			<?php
			$asientos = $this->Salas ;
			//Tengo un auxiliar para comparar
			$aux = "-1";
			//Separo las filas 
			foreach ($asientos as $key => $fila) {
				if($fila['letra'] != $aux){
					echo "<BR>".$fila["letra"];
					$aux = $fila["letra"];
				}	 	
			 	if($fila["ocupado"] != "1"){ ?>
						<label class="cbox_disponible"><input type="checkbox" name='reservas1[]' onchange="isChecked(this,'sub1')"  value="<?=$fila['id_af'] ?>"  ><?=$fila['numero']  ?></label>
		<?php 	}else{  ?>	
						<label class='cbox_ocupado' ><?=$fila['numero'] ?></label>
		<?php	}

			} ?>
			<input name="id_funcion" type="hidden" value="<?= $asientos['0']['id_funcion'] ?>">
			<input name="reservas" id="reservas" type="hidden" value="">
		</div>
		<div id="show"><label class="cbox_ocupado" >OCUPADO </label> <label class="cbox_disponible">DISPONIBLE</label> <label class="cbox_SE">SELECCIONADO</label></div>

		<div class="der">
			<input class="but" type="submit" value="RESERVAR" />
		</div>
	</form>
		<script  src="html/js/complejo.js" ></script>
</body>
</html>