<?php

// models/Peliculas.php

class Peliculas extends Model {


	public function getTodos() {
		$this->db->query("SELECT * FROM peliculas");
		return $this->db->fetchAll();
	}


}