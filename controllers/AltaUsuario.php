<?php 


    // controllers / AltaUsuario.php 

    require '../fw/fw.php';
    require '../models/Usuarios.php';
    require '../views/AltaUsuario.php';
    require '../views/AltaUsuarioOk.php';

    $mUser = new Usuarios();

    if(isset($_POST['nombre'])){

    	//Es de prueba , agregar al modelo pelicula
    	$mNuevoUser = new Usuarios();
    	$mNuevoUser->Alta($_POST['nombre'],$_POST['apellido'],$_POST['email'],sha1($_POST['contraseña']));

    	$vUser = new AltaUsuarioOk();
    }else{
    	$vUser = new AltaUsuario();
    	$vUser->Usuarios = $mUser->getTodos();
    }

    $vUser->render();

?>