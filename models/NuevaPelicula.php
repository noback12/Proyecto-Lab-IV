<?php 

//models/NuevaPelicula.php


class NuevaPelicula extends Model
{
	
	public function AgregarPeli($id_pelicula,$nombre,$duracion,$sinopsis,$genero,$estreno){

		$peliAux = new Peliculas();
		if(!$peliAux->existePelicula($id_pelicula))die("error peliculaexiste 1");

		//if(!is_numeric($duracion)) die ("error duracion no numerica");
		/* esto tengo que ir buscar la validacion para fechas 
		dia
		if(!ctype_digit($estreno)) die ("error estreno 1");
		if(($estreno)<1) die ("error estreno 2");
		if(($estreno)>31) die ("error estreno 2");
		mes
		if(!ctype_digit($estreno)) die ("error estreno 1");
		if(($estreno)<1) die ("error estreno 2");
		if(($estreno)>12) die ("error estreno 2");
		año
		if(!ctype_digit($estreno)) die ("error estreno 1");
		if(($estreno)<1900) die ("error estreno 2");
		if(($estreno)>date('Y')+30) die ("error estreno 2");
		

		if(!checkdate($mes,$dia,$anio))die ("error estreno check date");

		*/


		$this->db->query("INSERT INTO peliculas (nombre ,duracion,sinopsis,genero,estreno) 
			values ($id_pelicula,$nombre,$duracion,$sinopsis,$genero,$estreno)	");
	}
}

?>