<?php 


// controllers /CerrarSesion.php 
session_start();
unset($_SESSION['logueado']);
unset($_SESSION['email']);
session_destroy();
header("Location: ListadoPeliculas.php");

echo "asd";

?>