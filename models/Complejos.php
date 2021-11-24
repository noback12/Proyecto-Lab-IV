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
		// VALIDACIONES
		//Si el id del complejo no es númerico
		if(!ctype_digit($id_comp)) throw new ValidacionException("El id del complejo no es númerico");
		//Si el id es menor a uno
		if($id_comp < 1) throw new ValidacionException("El id del complejo es inferior a 1");
		//Si ponen un id inexistente

		$this->db->query("SELECT * FROM complejos
							WHERE id_complejo = $id_comp");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe el complejo elegido");


		return $this->db->fetchAll();
	}

	//Para mostrar las peliculas de un complejo
	public function getPeliculas($id_comp){
		// VALIDACIONES
		//Si el id del complejo no es númerico
		if(!ctype_digit($id_comp)) throw new ValidacionException("El id del complejo no es númerico");
		//Si el id es menor a uno
		if($id_comp < 1) throw new ValidacionException("El id del complejo es inferior a 1");
		//Si ponen un id inexistente
		$this->db->query("SELECT * FROM complejos
						 WHERE id_complejo = $id_comp ");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe el complejo elegido");

		//////////////////////////////////////////////////////////////

		$this->db->query("SELECT Distinct  P.nombre , P.id_pelicula ,S.id_complejo , P.sinopsis , P.imagen , C.nombre as ncomp
							FROM Peliculas AS P 
							INNER JOIN Funcion AS F ON P.id_pelicula = F.id_pelicula 
							INNER JOIN Salas AS S ON S.id_sala = F.id_Sala AND S.id_complejo = $id_comp
							INNER JOIN complejos as C on S.id_complejo = C.id_complejo
					  ");
		return $this->db->fetchAll();

	}

	public function getFunciones($id_peli , $id_comp)
	{
		// VALIDACIONES
		//si no existe
		if(!ctype_digit($id_peli)) throw new ValidacionException("El id de la pelicula no es numérico") ;
		//si es menor a uno
		if($id_peli < 1) throw new ValidacionException("El id de la pelicula es menor a 1");
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM peliculas
						 WHERE id_pelicula = $id_peli ");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe la pelicula elegida");


		//Si el id del complejo no es númerico
		if(!ctype_digit($id_comp)) throw new ValidacionException("El id del complejo no es númerico");
		//Si el id es menor a uno
		if($id_comp < 1) throw new ValidacionException("El id del complejo es inferior a 1");
		//Si ponen un id inexistente
		$this->db->query("SELECT * FROM complejos
						 WHERE id_complejo = $id_comp ");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe el complejo elegido");

		//////////////////////////////////////////////////////////////

		$this->db->query("SELECT * 
							FROM funcion AS F
							LEFT JOIN PELICULAS AS P on P.id_pelicula = F.id_pelicula
							Right JOIN Salas AS S ON S.id_sala = F.id_Sala AND S.id_complejo = $id_comp
							WHERE F.id_pelicula = $id_peli 
							
					  ");
		return $this->db->fetchAll();
		
	}


}