<?php

// fw/View.php



//Abastract para que no sea instanciado nunca por si solo 
abstract class View {

	//Pego las lineas del html en las views para mostarlas
	public function render() {
		//el "getclass" devuelve el nombre de la clase y por eso siempre repito los nombres de clases en el MVC 
		include '../html/' . get_class($this) . '.php';
	}


	//Esto funciona pero forza a siempre escribir un parametro que es el mismo que la clase en cada controlador
	public function render2($archivo){
		include '../html/'.$archivo.'.php';
	}


}