<?php 


    // controllers / EliminarFuncion.php 

    require '../fw/fw.php';
    require '../models/Funciones.php';
    require '../views/EliminarFuncion.php';
    require '../views/EliminarFuncionOk.php';
    session_start();
    if(isset($_SESSION['empleado']) ){
        
        $mFuncion = new Funciones();
       if(isset($_POST['funcion'])){
            
            $mFuncion->EliminarFunc($_POST['funcion']);

            $vFunc = new EliminarFuncionOK();
        }else{
            $vFunc = new EliminarFuncion();
            $vFunc->Funciones = $mFuncion->getAEliminar();
        }
        $vFunc->render();
    }else{
        header("Location: InicioSesionEmpleado.php");
    }


?>