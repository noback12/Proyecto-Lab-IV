<?php

//Models/Usuarios-php 

/**
 * 
 */
class Usuarios extends Model
{
	
	public function Inicio($email, $passwd){

		//valid1 
		//
		$this->db->query("SELECT *
										FROM usuarios
										WHERE email='$email' and contraseña='$passwd'
										LIMIT 1");
		return $this->db->fetchAll();
	}

	public function getTodos() {
		$this->db->query("SELECT * FROM usuarios");
		return $this->db->fetchAll();
	}

	public function Alta($nombre, $apellido, $email, $contraseña){

			$userAux = new Usuarios();

			$this->db->query("INSERT INTO usuarios (nombre ,apellido,email,contraseña) 
			values ('$nombre','$apellido','$email','$contraseña')	");
	}


}

?>