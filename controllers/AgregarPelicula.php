<?php 


// controllers / AgregarPelicula.php 

require '../fw/fw.php';
require '../models/Peliculas.php';
require '../models/NuevaPelicula.php';
require '../views/AgregarPelicula.php';
require '../views/AgregarPeliculaOk.php';



$mPeli = new Peliculas();

//if(count($_POST)>0){
if(isset($_POST['nombre'])){

	//Es de prueba , agregar al modelo pelicula
	$mNuevaPelicula = new NuevaPelicula();

	?><table>
<?php 

    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }

?>
</table><?php 
	$mNuevaPelicula->AgregarPeli($_POST['nombre'],$_POST['duracion'],$_POST['sinopsis'],$_POST['genero'],$_POST['estreno']);

	$vPeli = new AgregarPeliculaOK();
}else{
	$vPeli = new AgregarPelicula();
	$vPeli->Peliculas = $mPeli->getTodos();
}

$vPeli->render();



?>