<?php

//controllers/listaComplejos.php 


//.. es para ir una carpeta hacia atras y no entrar a controllers devuelta
require '../fw/fw.php';
require '../models/Complejos.php';
require '../views/ListadoComplejos.php';



$comp = new Complejos();
$todos = $comp->getTodos(); 

/*var_dump($todos);
	para chequear que este todo
*/


$vcomp = new ListadoComplejos();
$vcomp->complejos = $todos ;
$vcomp->render();


