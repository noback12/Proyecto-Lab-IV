<?php  

//controllers/InicioSesionEmpleado.php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/InicioSesionEmpleado.php';
require '../views/InicioSesionEOk.php';

$mEmp = new Empleados();

if(isset($_POST['email'])){
	//validaciones
	/*echo "<table>"; 
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
    echo "</table>";*/

	$email = $_POST['email'];
	$passwd = sha1($_POST['contraseña']);
	$Empleados = $mEmp->Inicio($email, $passwd);
	$vEmp = new InicioSesionEOk();
	$vEmp->Empleados = $Empleados;
}

else{

	$vEmp = new InicioSesionEmpleado();
	//$vUser->Usuarios = $Usuarios;
}

$vEmp->render();

?>