<?php 


    // controllers / AgregarPelicula.php 

    require '../fw/fw.php';
    require '../models/Peliculas.php';
    require '../views/AgregarPelicula.php';
    require '../views/AgregarPeliculaOk.php';

    $mPeli = new Peliculas();
    session_start();
    if(isset($_SESSION['empleado']) ){
        //if(count($_POST)>0){
        if(isset($_POST['nombre'])){

        	$mNuevaPelicula = new Peliculas();

        	$mNuevaPelicula->AgregarPeli($_POST['nombre'],$_POST['duracion'],$_POST['sinopsis'],$_POST['genero'],$_POST['estreno'],$_POST['imagen']);

        	$vPeli = new AgregarPeliculaOK();
        }else{
        	$vPeli = new AgregarPelicula();
        	$vPeli->Peliculas = $mPeli->getTodos();
        }
        $vPeli->render();
    }else{
        header("Location: InicioSesionEmpleado");
    }
?>