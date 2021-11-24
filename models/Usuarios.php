<?php

//Models/Usuarios-php 

/**
 * 
 */
class Usuarios extends Model
{
	
	public function Inicio($email, $passwd){
 
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
			// VALIDACIONES
			//Validacion nombre
			if(!isset($_POST['nombre'])) throw new ValidacionException("error nombre 1");
			if(strlen($_POST['nombre']) <2  )throw new ValidacionException("error nombre menor a 2 caracteres");

			//dato sanitizado
			$_POST['nombre'] = substr($_POST['nombre'], 0, 30);

			//Validacion apellido
			if(!isset($_POST['apellido'])) throw new ValidacionException("error apellido 1");
			if(strlen($_POST['apellido']) <2  )throw new ValidacionException("error apellido menor a 2 caracteres");

			//dato sanitizado
			$_POST['apellido'] = substr($_POST['apellido'], 0, 30);

			//Validacion email
			if(!isset($_POST['email'])) throw new ValidacionException("error email 1");
			if(strlen($_POST['email']) <2  )throw new ValidacionException("error email menor a 2 caracteres");

			//dato sanitizado
			$_POST['email'] = substr($_POST['email'], 0, 30);

			//Validacion contraseña
			if(!isset($_POST['contraseña'])) throw new ValidacionException("error contraseña 1");
			if(strlen($_POST['contraseña']) <2  )throw new ValidacionException("error contraseña menor a 2 caracteres");

			//dato sanitizado
			$_POST['contraseña'] = substr($_POST['contraseña'], 0, 30);


			//////////////////////////////////////////////////////////////

			$this->db->query("INSERT INTO usuarios (nombre ,apellido,email,contraseña) 
			values ('$nombre','$apellido','$email','$contraseña')	");
	}


}

?>