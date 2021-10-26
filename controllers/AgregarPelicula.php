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
	
	//if(!isset($_POST['id_pelicula']))die("controller id_pelicula error 1  ");
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


	if(!isset($_POST['nombre']))die("nombre error 1 ");
	if(!isset($_POST['duracion']))die("duracion error 1 ");
	if(!isset($_POST['sinopsis']))die("sinopsis error 1 ");
	if(!isset($_POST['genero']))die("controller genero error 1 ");
	if(!isset($_POST['estreno']))die("estreno error 1 ");



	$mNuevaPelicula->AgregarPeli($_POST['nombre'],$_POST['duracion'],$_POST['sinopsis'],$_POST['genero'],$_POST['estreno']);

	$vPeli = new AgregarPeliculaOK();
}else{
	$vPeli = new AgregarPelicula();
	$vPeli->Peliculas = $mPeli->getTodos();
}

$vPeli->render();



?>