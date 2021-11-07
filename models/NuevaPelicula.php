<?php 

//models/NuevaPelicula.php


class NuevaPelicula extends Model
{
	

	public function AgregarPeli($nombre,$duracion,$sinopsis,$genero,$estreno){



		$peliAux = new Peliculas();
		
		//if(!$peliAux->existePelicula($id_pelicula))die("error peliculaexiste 1");

		//Validacion nombre
		if(!isset($_POST["nombre"])) die("error nombre 1");
		if(strlen($_POST["nombre"]) <1  )die("error nombre menor 1");
		// escapeWildcards???

		//Validacion Duracion
		$horas = substr($duracion , 0 ,2 ); 
		$minutos= substr($duracion,3,5);
		if(!is_numeric($horas) or !is_numeric($minutos)) die ("error duracion no numerica");
		if($horas < 0 or $minutos < 0) die("error duracion negativa");

		//validacion sinopsis 
		if(!isset($_POST["sinopsis"])) die("error sinopsis 1");
		if(strlen($_POST["sinopsis"]) <1  )die("error sinopsis menor 1");
		// escapeWildcards???

		//Validando estreno 
		//var_dump($_POST["fecha"]); Para ver el formato que recibo la fecha 
		$fecha = $_POST["estreno"] ; //Guardo la fecha entera  
		$anio = substr($fecha , 0,4); // Separo el año 
		$mes = substr($fecha , 5,2) ; // mes 
		$dia = substr($fecha ,8,2) ; // Dia 
		//echo "dia " . $dia . " Mes " . $mes . " año: " . $anio ;
		if (!checkdate($mes,$dia,$anio) or $anio < 1895 or $anio > date('Y')+10 ){ // Asumo que puede haber peliculas que se estrenaron antes de la fecha de hoy pero no hay estrenos confirmados para mas de 10 años en el futuro 
			die("error fecha invalida");
		}

		


		$this->db->query("INSERT INTO peliculas (nombre ,duracion,sinopsis,genero,estreno) 
			values ('$nombre','$duracion','$sinopsis','$genero','$estreno')	");
	}
}

?>