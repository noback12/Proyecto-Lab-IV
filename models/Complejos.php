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

}