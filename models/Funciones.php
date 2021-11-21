<?php

// models/Funciones.php
	class Funciones extends Model {

		
		public function getTodos() {
			$this->db->query("SELECT * FROM funcion");
			return $this->db->fetchAll();
		}

		public function getFuncionesSala($idSala){
			$this->db->query("SELECT * 
							FROM funcion
							WHERE id_sala = $idSala");
			return $this->db->fetchAll();

		}
		
		public function reservar1($arrayR){
			$this->db->query("SELECT * 
							FROM asiento_funcion
							");
			return $this->db->fetchAll();


		}

	}
?>