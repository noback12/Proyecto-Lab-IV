<?php 


// controllers / altapelicula 

require '../fw/fw.php';
require '../models/Peliculas.php';
require '../views/AgregarPelicula.php';


$p = new Peliculas(); 
$todos = $p->getTodos();


$v = new AgregarPelicula();
$v->peliculas = $todos;
$v->render();