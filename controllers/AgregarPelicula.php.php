<?php 


// controllers / AgregarPelicula.php 

require '../fw/fw.php';
require '../models/Peliculas.php';
require '../views/AgregarPelicula.php';


$mPeli = new Peliculas();

$vPeli = new AgregarPelicula();
$vPeli->Peliculas = $mPeli->getTodos();
$vPeli->render();



?>