<?php

// models/Salas.php

class Salas extends Model {

	
	public function getTodos() {
		$this->db->query("SELECT * FROM salas");
		return $this->db->fetchAll();
	}

	public function getSalaComplejo($id_comp){
		$this->db->query("SELECT * 
							FROM salas
							WHERE id_complejo = $id_comp");
		return $this->db->fetchAll();
	}

	public function existeSala($pId){
		//si no existe
		if(!ctype_digit($pId)) return false ;
		//si es menor a uno
		if($pId < 1) return false;
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM salas
						 WHERE id_salas = $pId ");

		if($this->db->numRows() !=1) return false;

		return true ; 
	}

}