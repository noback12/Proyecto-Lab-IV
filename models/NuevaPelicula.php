<?php 

//models/NuevaPelicula.php

/**
 * 
 */
class NuevaPelicula extends Model
{
	
	public function AgregarPeli($id_pelicula,$nombre,$duracion,$sinopsis,$genero,$estreno){

		$peliAux = new Peliculas();
		if(!$peliAux->existePelicula($id_pelicula))die("error peliculaexiste 1");


		$this->db->query("INSERT INTO peliculas (nombre ,duracion,sinopsis,genero,estreno) 
			values ($id_pelicula,$nombre,$duracion,$sinopsis,$genero,$estreno)	");
	}
}

?>