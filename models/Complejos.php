<?php

//Models/Complejos-php 

/**
 * 
 */
class Complejos extends Model
{
	
	public function getTodos(){
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
		$this->db->query("SELECT * 
							FROM Peliculas AS P 
							INNER JOIN Funcion AS F ON P.id_pelicula = F.id_pelicula 
							INNER JOIN Salas AS S ON S.id_sala = F.id_Sala AND S.id_complejo = $id_comp
					  ");
		return $this->db->fetchAll();


	}


}