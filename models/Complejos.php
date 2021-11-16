<?php

//Models/Complejos-php 

/**
 * 
 */
class Complejos extends Model
{
	
	public function getTodos(){

		//valid1 
		//
		$this->db->query("SELECT * FROM complejos");
		return $this->db->fetchAll();
	}

	public function getUnComplejo($id_comp){
		$this->db->query("SELECT * FROM complejos
							WHERE id_complejo =$id_comp");
		return $this->db->fetchAll();

	}


	public function existeComplejo($Id){
		//si no existe
		if(!ctype_digit($Id)) return false ;
		//si es menor a uno
		if($pId < 1) return false;
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM salas
						 WHERE id_salas = $Id ");

		if($this->db->numRows() !=1) return false;

		return true ; 
	}

	//Para mostrar las peliculas de un complejo
	public function getPeliculas($id_comp){
		//dinstict para que no me repita la pelicula por cada funcion 
		//Muestro las peliculas , que estan en las funciones de las salas , de ese complejo
		$this->db->query("SELECT Distinct  P.nombre , P.id_pelicula ,S.id_complejo , P.sinopsis , P.imagen
							FROM Peliculas AS P 
							INNER JOIN Funcion AS F ON P.id_pelicula = F.id_pelicula 
							INNER JOIN Salas AS S ON S.id_sala = F.id_Sala AND S.id_complejo = $id_comp
					  ");
		return $this->db->fetchAll();

	}

	public function getFunciones($id_peli , $id_comp)
	{
		$this->db->query("SELECT F.id_funcion ,F.dia , F.hora 
							FROM funcion AS F
							INNER JOIN Salas AS S ON S.id_sala = F.id_Sala AND S.id_complejo = $id_comp
							WHERE id_pelicula = $id_peli 
							
					  ");
		return $this->db->fetchAll();
		
	}


}