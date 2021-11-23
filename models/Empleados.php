<?php

//Models/Empleados.php 

/**
 * 
 */
class Empleados extends Model
{
	
	public function Inicio($email, $passwd){

		//valid1 
		//
		$this->db->query("SELECT *
										FROM empleados
										WHERE email='$email' and contraseña='$passwd'
										LIMIT 1");
		return $this->db->fetchAll();
	}
}

?>