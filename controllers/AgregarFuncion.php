<?php 


    // controllers / AgregarFuncion.php 

    require '../fw/fw.php';
    require '../models/Funciones.php';
    require '../models/Peliculas.php';
    require '../views/AgregarFuncion.php';
    require '../views/ListadoFunciones.php';
    require '../views/ElegirPelicula.php';
    session_start();
    if(isset($_SESSION['empleado']) ){
        $mFuncion = new Funciones();

        if(isset($_POST['pelicula'],$_POST['dia'])){

            //Creo la funcion
            $mFuncion->AgregarFuncion2($_POST['dia'],$_POST['hora'],$_POST['Sala'],$_POST['pelicula']);

            //Asigno los asientos a dicha funcion a desocupados
            $mFuncion->AsignarAsientos($_POST['dia'],$_POST['hora'],$_POST['Sala'],$_POST['pelicula']);

            $todas = $mFuncion->getTodos(); 

            $vFuncion = new ListadoFunciones();
            $vFuncion->Funciones = $todas ;
        }else if(isset($_POST['dia'])){


            $mPeli = new Peliculas();

            $vFuncion = new ElegirPelicula();
            $vFuncion->Peliculas =  $mPeli->getTodos();


        }else{

        	$vFuncion = new AgregarFuncion();
        	$vFuncion->Funciones =  $mFuncion->AgregarFuncion1();
        }

        $vFuncion->render();
    }else{
        header("Location: InicioSesionEmpleado");
    }


?>