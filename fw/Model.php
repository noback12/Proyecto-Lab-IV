<?php

// fw/Model.php

abstract class Model {

	//Solo puede ser accedida por clases hijas 
	protected $db;

	//singleton
	public function __construct() {
		$this->db = Database::getInstance();
	}
}
