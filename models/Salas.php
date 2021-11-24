<?php

// models/Salas.php

class Salas extends Model {

	
	public function getTodos() {
		$this->db->query("SELECT * FROM salas");
		return $this->db->fetchAll();
	}

	public function getSalaComplejo($id_comp){
		// VALIDACIONES
		//Si el id de la sala no es númerico
		if(!ctype_digit($id_comp)) throw new ValidacionException("El id del complejo no es númerico");
		//Si el id es menor a uno
		if($id_comp < 1) throw new ValidacionException("El id del complejo es inferior a 1");
		//Si ponen un id inexistente
		$this->db->query("SELECT * FROM complejos
						 WHERE id_comp = $id_comp");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe el complejo elegido");

		////////////////////////////////////////////////////////////////////////////////////


		$this->db->query("SELECT * 
							FROM salas
							WHERE id_complejo = $id_comp");
		return $this->db->fetchAll();
	}

	public function existeSala($pId){
		// VALIDACIONES
		//si no existe
		if(!ctype_digit($pId)) throw new ValidacionException("El id de la sala no es númerico");
		//si es menor a uno
		if($pId < 1) throw new ValidacionException("El id de la sala es inferior a 1");
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM salas
						 WHERE id_sala = $pId ");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe la sala elegida");

		return true;
	}

	public function asientoFuncion($funcion){
		// VALIDACIONES
		//Si el id de la función no es númerico
		if(!ctype_digit($funcion)) throw new ValidacionException("El id de la función no es númerico");
		//Si el id es menor a uno
		if($funcion < 1) throw new ValidacionException("El id de la función es inferior a 1");
		//Si ponen un id inexistente
		$this->db->query("SELECT * FROM funcion
						 WHERE id_funcion = $funcion ");

		if($this->db->numRows() !=1) throw new ValidacionException("No existe la función elegida");

		////////////////////////////////////////////////////////////////////////////////////


		$this->db->query("SELECT *
							 FROM asiento_funcion as af
							 LEFT JOIN  asientos as a 
							 ON af.id_asiento = a.id_asiento
							 WHERE af.id_funcion =$funcion
							 ORDER BY a.letra , a.numero");
		return $this->db->fetchAll();
	}

}