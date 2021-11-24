<?php 


    // controllers / EliminarPelicula.php 

    require '../fw/fw.php';
    require '../models/Peliculas.php';
    require '../views/EliminarPelicula.php';
    require '../views/EliminarPeliculaOk.php';

    $mPeli = new Peliculas();
    /*session_start();
    if(isset($_SESSION['empleado']) ){*/
        //if(count($_POST)>0){
        if(isset($_POST['pelicula'])){

        	$mNuevaPelicula = new Peliculas();
        	$mNuevaPelicula->EliminarPeli($_POST['pelicula']);

        	$vPeli = new EliminarPeliculaOK();
        }else{
        	$vPeli = new EliminarPelicula();
        	$vPeli->Peliculas = $mPeli->getTodos();
        }
        $vPeli->render();
    /*}else{
        header("Location: InicioSesionEmpleado.php");
    }*/
?>