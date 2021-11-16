<?php

// models/Peliculas.php

class Peliculas extends Model {

	
	public function getTodos() {
		$this->db->query("SELECT * FROM peliculas");
		return $this->db->fetchAll();
	}

	public function getPelicula($id_peli){
		//Validar
		$this->db->query("SELECT * 
							FROM peliculas
							WHERE id_pelicula = $id_peli");
		//Fetch all devuelve un array , fetch solo una fila
		return $this->db->fetch();
	}

	public function existePelicula($pId){
		//si no existe
		if(!ctype_digit($pId)) return false ;
		//si es menor a uno
		if($pId < 1) return false;
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM peliculas
						 WHERE id_pelicula = $pId ");

		if($this->db->numRows() !=1) return false;

		return true ; 
	}

	public function AgregarPeli($nombre,$duracion,$sinopsis,$genero,$estreno,$imagen){

		$peliAux = new Peliculas();
		
		//if(!$peliAux->existePelicula($id_pelicula))die("error peliculaexiste 1");

		//Validacion nombre
		if(!isset($_POST["nombre"])) die("error nombre 1");
		if(strlen($_POST["nombre"]) <1  )die("error nombre menor 1");
		// escapeWildcards???

		//Validacion Duracion
		$horas = substr($duracion , 0 ,2 ); 
		$minutos= substr($duracion,3,5);
		//ctdigit
		if(!is_numeric($horas) or !is_numeric($minutos)) die ("error duracion no numerica");
		if($horas < 0 or $minutos < 0) die("error duracion negativa");

		//validacion sinopsis 
		if(!isset($_POST["sinopsis"])) die("error sinopsis 1");
		if(strlen($_POST["sinopsis"]) <1  )die("error sinopsis menor 1");
		// escapeWildcards???

		//Validando estreno 
		//var_dump($_POST["fecha"]); Para ver el formato que recibo la fecha 
		$fecha = $_POST["estreno"] ; //Guardo la fecha entera  
		$anio = substr($fecha , 0,4); // Separo el año 
		$mes = substr($fecha , 5,2) ; // mes 
		$dia = substr($fecha ,8,2) ; // Dia 
		//echo "dia " . $dia . " Mes " . $mes . " año: " . $anio ;
		if (!checkdate($mes,$dia,$anio) or $anio < 1895 or $anio > date('Y')+10 ){ // Asumo que puede haber peliculas que se estrenaron antes de la fecha de hoy pero no hay estrenos confirmados para mas de 10 años en el futuro 
			die("error fecha invalida");
		}

		//Si se quiere subir una imagen

   //Recogemos el archivo enviado por el formulario
   $imagen = $_FILES['imagen']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($imagen) && $imagen != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp = $_FILES['imagen']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 200000000000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'images/'.$imagen)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('images/'.$imagen, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="images/'.$imagen.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }


		
		$this->db->query("INSERT INTO peliculas (nombre ,duracion,sinopsis,genero,estreno,imagen) 
			values ('$nombre','$duracion','$sinopsis','$genero','$estreno','$imagen')	");
	}

}