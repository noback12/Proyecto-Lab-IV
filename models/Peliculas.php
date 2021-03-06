<?php

// models/Peliculas.php

class Peliculas extends Model {

	
	public function getTodos() {
		$this->db->query("SELECT * FROM peliculas");
		return $this->db->fetchAll();
	}

	public function getPelicula($id_peli){
		// VALIDACIONES

		//si no existe
		if(!ctype_digit($id_peli)) throw new ValidacionException("Error id_peli 1") ;
		//si es menor a uno
		if($id_peli < 1) throw new ValidacionException("El id de la pelicula es menor a 1");
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM peliculas
						 WHERE id_pelicula = $id_peli ");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe la pelicula elegida");

		////////////////////////////////////////////////////////////////////////////////////


		$this->db->query("SELECT * 
							FROM peliculas
							WHERE id_pelicula = $id_peli");
		//Fetch all devuelve un array , fetch solo una fila
		return $this->db->fetch();
	}

	public function AgregarPeli($nombre,$duracion,$sinopsis,$genero,$estreno,$imagen){
		// VALIDACIONES

		//Validacion nombre
		if(!isset($_POST['nombre'])) throw new ValidacionException("error nombre 1");
		if(strlen($_POST['nombre']) <2  )throw new ValidacionException("error nombre menor a 2 caracteres");

		//dato sanitizado
		$_POST['nombre'] = substr($_POST['nombre'], 0, 50);

		//Validacion Duracion
		$horas = substr($duracion , 0 ,2 ); 
		$minutos= substr($duracion,3,5);
		
		if(!ctype_digit($horas) or !ctype_digit($minutos)) throw new ValidacionException ("error duracion no numerica");
		if($horas < 0 or $minutos < 0) throw new ValidacionException("error duracion negativa");

		//validacion sinopsis 
		if(!isset($_POST['sinopsis'])) throw new ValidacionException("error sinopsis 1");
		if(strlen($_POST['sinopsis']) <1  )throw new ValidacionException("error sinopsis menor 1");
		// escapeWildcards???
		//dato sanitizado
		$_POST['nombre'] = substr($_POST['nombre'], 0, 300);

		//Validando estreno 
		//var_dump($_POST["fecha"]); Para ver el formato que recibo la fecha 
		$fecha = $_POST['estreno'] ; //Guardo la fecha entera  
		$anio = substr($fecha , 0,4); // Separo el a??o 
		$mes = substr($fecha , 5,2) ; // mes 
		$dia = substr($fecha ,8,2) ; // Dia 
		
		if (!checkdate($mes,$dia,$anio) or $anio < 1895 or $anio > date('Y')+10 ){ // Asumo que puede haber peliculas que se estrenaron antes de la fecha de hoy pero no hay estrenos confirmados para mas de 10 a??os en el futuro 
			throw new ValidacionException("error fecha invalida");
		}

		$link= "$imagen";
		//Validacion de imagenes
		es_imagen($link);
    	$destdir = '../images';
    	$img=file_get_contents($link);
    	file_put_contents($destdir.substr($link, strrpos($link,'/')), $img);

    	$lugar = $destdir.substr($link, strrpos($link,'/'));

    	////////////////////////////////////////////////////////////////////////////////////

		
		$this->db->query("INSERT INTO peliculas (nombre ,duracion,sinopsis,genero,estreno,imagen) 
			values ('$nombre','$duracion','$sinopsis','$genero','$estreno','$lugar')	");
	}


	public function eliminarPeli($pId){

		//si no existe
		if(!ctype_digit($pId)) throw new ValidacionException("Error") ;
		//si es menor a uno
		if($pId < 1) throw new ValidacionException("Error");
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM peliculas
						 WHERE id_pelicula = $pId ");

		if($this->db->numRows() !=1) throw new ValidacionException("Error");

		$this->db->query("DELETE FROM peliculas WHERE id_pelicula = $pId");
		//Tambien borro las funciones asociadas
		$this->db->query("DELETE FROM funcion WHERE id_pelicula IN ($pId)");

	}

}


//Para validar que sea un link a una imagen 
function es_imagen($path)
{	
	if(getimagesize($path) == FALSE){
    	throw new ValidacionException("error No es una imagen 1");
    }

    $a = getimagesize($path);
    
    $image_type = $a[2];

    if(in_array($image_type , array( IMAGETYPE_JPEG ,IMAGETYPE_PNG )))
    {
        return true;
    }
    throw new ValidacionException("No es una imagen Valida");
}