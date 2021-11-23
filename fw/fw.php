<?php

	// fw/fw.php
	//Esto es para incluir Database , model y view a todas las clases que tengan el require fw
	//La primera linea SIEMPRE tiene que ser fw/fw.php

	require '../fw/Database.php';
	//Para poder hacer consultas
	require '../fw/Model.php';
	//Para hacer el render 
	require '../fw/View.php';

	//Para arrojar las excepciones
	require '../fw/ValidacionException.php';

?>