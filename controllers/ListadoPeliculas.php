<?php  

//controllers/ListaPeliculas.php

require '../fw/fw.php';
require '../models/Peliculas.php';
require '../views/ListadoPeliculas.php';
session_start();

$mPeli = new Peliculas();
$Peliculas = $mPeli->getTodos();

$vPeli = new ListadoPeliculas();
$vPeli->Peliculas = $Peliculas;
$vPeli->render();

?>