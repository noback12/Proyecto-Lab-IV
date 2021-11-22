<!-- htmi/ReservarAsientosCompleto.php -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reserva De asientos Exitosa</title>
</head>
<body>
	<h1>CONFIRMACION DE COMPRA</h1>

	<table>
			<tr>
				<th>Letra</th>
				<th>numero</th>
			</tr>

			<?php
			$cantEntradas = 0;
			 foreach ($this->Funciones as $f ) 
			 {  
			 	$cantEntradas ++;
			 	?>
			 
				<tr>
					<td><?= $f['letra'] ?></td>
					<td><?= $f['numero'] ?></td>
				</tr>
				<input name='reservas2[]' type="hidden" value="<?= $f['id_af'] ?>">
			<?php } 
		
				$precio = $f['precio'] * $cantEntradas;   
			?>
				<tr>
					<td colspan="2">PELICULA: <?= $f['peli'] ?></td>
				</tr>
				<tr>
					<td colspan="2">COMPLEJO: <?= $f['nombre'] ?></td>
				</tr>
				<tr>
					<td>Dia: <?= $f['dia'] ?></td>
					<td>Horario: <?= $f['hora'] ?></td>
				</tr>
				<tr>
					<td colspan="2">SALA: <?= $f['sala'] ?></td>
				</tr>
				<tr>
					<td colspan="2"><?= $cantEntradas ?> ENTRADAS </td>
				</tr>
				<tr>
					<td colspan="2">TOTAL $<?= $precio ?>  </td>
				</tr>
		</table>


	<a href="http://localhost:8080/lab%20IV/Proyecto-Lab-IV/Proyecto-Lab-IV/controllers/ListadoPeliculas.php">Home</a>

</body>
</html>