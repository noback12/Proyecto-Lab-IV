<?php

// models/Funciones.php
	class Funciones extends Model {
		
		public function getTodos() {
			$this->db->query("SELECT * FROM funcion");
			return $this->db->fetchAll();
		}

		public function getFuncionesSala($idSala){
			// VALIDACIONES
			//Si el id de la sala no es númerico
			if(!ctype_digit($idSala)) throw new ValidacionException("El id de la sala no es númerico");
			//Si el id es menor a uno
			if($idSala < 1) throw new ValidacionException("El id de la sala es inferior a 1");
			//Si ponen un id inexistente
			$this->db->query("SELECT * FROM salas
							 WHERE id_sala = $idSala");

			if($this->db->numRows() !=1) throw new ValidacionException("No existe la sala elegida");

			////////////////////////////////////////////////////////////////////////////////////


			$this->db->query("SELECT * 
							FROM funcion
							WHERE id_sala = $idSala");
			return $this->db->fetchAll();
		}

		public function reservar1(array $arrayR){
			//In me permite especificar multiples valores en la clausula Where 
			//Para seleccionar varios ids tendria que hacer WHERE id_af IN(id1,id2,....); pero nose la cantidad de ids que tendre asi que uso implode("," ,) 
			//Implode(",",$Elarray)me separa los valores del array en un string y los separa con la ",". 

			$this->db->query("SELECT AF.id_af ,A.letra,A.numero,S.numero as sala,C.nombre,C.precio,P.nombre as peli,F.hora ,F.dia
							FROM asiento_funcion as AF
							LEFT JOIN asientos as A on Af.id_asiento = A.id_asiento
							LEFT JOIN salas as S on A.id_sala = S.id_sala
							LEFT JOIN complejos as C on S.id_complejo= C.id_complejo
							LEFT JOIN funcion as F on AF.id_funcion =F.id_funcion
							LEFT JOIN peliculas as P on F.id_pelicula = P.id_pelicula
							WHERE id_af IN (" . implode(',', $arrayR) . ")"
							);
			return $this->db->fetchAll();
		}


		public function reservar2(array $arrayR){

			// Hago un uptade para que actualize los asientos que fueron seleccionados y queden ocupados 
			$this->db->query("UPDATE asiento_funcion 
								SET ocupado = '1' 
								WHERE id_af IN (" . implode(',', $arrayR) . ")"
							);

			//El select es para mostrar una ultima vez que se compro 
			$this->db->query("SELECT AF.id_af ,A.letra,A.numero,S.numero as sala,C.nombre,C.precio,P.nombre as peli,F.hora ,F.dia
								FROM asiento_funcion as AF
								LEFT JOIN asientos as A on Af.id_asiento = A.id_asiento
								LEFT JOIN salas as S on A.id_sala = S.id_sala
								LEFT JOIN complejos as C on S.id_complejo= C.id_complejo
								LEFT JOIN funcion as F on AF.id_funcion =F.id_funcion
								LEFT JOIN peliculas as P on F.id_pelicula = P.id_pelicula
								WHERE id_af IN (" . implode(',', $arrayR) . ")"
								);
			return $this->db->fetchAll();
		}

		//para elegir las salas existentes al crear una funcion  
		public function AgregarFuncion1(){
			$this->db->query("SELECT S.id_sala,S.numero,C.nombre
							 FROM salas as S
							 LEFT JOIN  complejos as C 
							 ON C.id_complejo = S.id_complejo
							 ORDER BY C.nombre ,S.numero ");
		return $this->db->fetchAll();

		}

		public function AgregarFuncion2($day,$hora,$sala,$peli){
			// VALIDACIONES
			$fecha = $day ; //Guardo la fecha entera  
			$anio = substr($fecha , 0,4); // Separo el año 
			$mes = substr($fecha , 5,2) ; // mes 
			$dia = substr($fecha ,8,2) ; // Dia 
		
			if (!checkdate($mes,$dia,$anio) or $anio < date('Y') or $anio > date('Y')+1 ){
				throw new ValidacionException("error fecha invalida");
			}

			$horas = substr($hora , 0 ,2 ); 
			$minutos= substr($hora,3,5);

			//si no existe
			if(!ctype_digit($sala)) throw new ValidacionException("El id de la sala no es númerico");
			//si es menor a uno
			if($sala < 1) throw new ValidacionException("El id de la sala es inferior a 1");
			//se obtienen mas de 1 resultado  ($pId echo ? )
			$this->db->query("SELECT * FROM salas
							 WHERE id_sala = $sala ");

			if($this->db->numRows() !=1) throw new ValidacionException("No existe la sala elegida");

			//si no existe
			if(!ctype_digit($peli)) throw new ValidacionException("El id de la pelicula es inferior a 1");
			//si es menor a uno
			if($peli < 1) throw new ValidacionException("No existe la pelicula elegida");
			//se obtienen mas de 1 resultado  ($pId echo ? )
			$this->db->query("SELECT * FROM peliculas
							 WHERE id_pelicula = $peli ");

			if($this->db->numRows() !=1) throw new ValidacionException("El id de la pelicula no es númerico");


			////////////////////////////////////////////////////////////////////////////////////


			//Nueva funcion 
		     $this->db->query("INSERT INTO funcion (dia,hora,id_sala,id_pelicula) 
					values ('$day','$hora','$sala','$peli')	");

		}


		public function AsignarAsientos($day,$hora,$sala,$peli){

			// VALIDACIONES
			$fecha = $day ; //Guardo la fecha entera  
			$anio = substr($fecha , 0,4); // Separo el año 
			$mes = substr($fecha , 5,2) ; // mes 
			$dia = substr($fecha ,8,2) ; // Dia 
		
			if (!checkdate($mes,$dia,$anio) or $anio < date('Y') or $anio > date('Y')+1 ){
				throw new ValidacionException("error fecha invalida");
			}

			$horas = substr($hora , 0 ,2 ); 
			$minutos= substr($hora,3,5);

			//si no existe
			if(!ctype_digit($sala)) throw new ValidacionException("El id de la sala no es númerico");
			//si es menor a uno
			if($sala < 1) throw new ValidacionException("El id de la sala es inferior a 1");
			//se obtienen mas de 1 resultado  ($pId echo ? )
			$this->db->query("SELECT * FROM salas
							 WHERE id_sala = $sala ");

			if($this->db->numRows() !=1) throw new ValidacionException("No existe la sala elegida");

			//si no existe
			if(!ctype_digit($peli)) throw new ValidacionException("El id de la pelicula es inferior a 1");
			//si es menor a uno
			if($peli < 1) throw new ValidacionException("No existe la pelicula elegida");
			//se obtienen mas de 1 resultado  ($pId echo ? )
			$this->db->query("SELECT * FROM peliculas
							 WHERE id_pelicula = $peli ");

			if($this->db->numRows() !=1) throw new ValidacionException("El id de la pelicula no es númerico");

			////////////////////////////////////////////////////////////////////////////////////

			$this->db->query("SELECT id_funcion FROM funcion order by id_funcion DESC limit 1");
			$func = $this->db->fetchAll();
			//Obtengo el id de la funcion 
			$idFunc=  $func[0]["id_funcion"];

			//creo un array
			$ids_array = array();

			$this->db->query("SELECT id_asiento FROM asientos WHERE id_sala = $sala");

			$result = $this->db->fetchAll();


			foreach ($result as $key => $value) {
				$ids_array[] = $value["id_asiento"] ;
			}
			
			//Asigno todos los asientos de la sala a desocupados en el horario elegido
			foreach ($ids_array as $key => $value) {
				 $this->db->query("INSERT INTO asiento_funcion (id_asiento,id_funcion,ocupado) 
					values ('$value','$idFunc','0')	");
			}

		}

		public function getAEliminar() {
			$this->db->query("SELECT dia,hora,id_funcion,p.nombre as nombre , s.numero as numero ,c.nombre as complejo
							FROM funcion  as f
							LEFT JOIN peliculas as p on p.id_pelicula =f.id_pelicula
							LEFT JOIN salas as s on s.id_sala = f.id_sala
							LEFT JOIN complejos as c on c.id_complejo = s.id_complejo
							");
			return $this->db->fetchAll();
		}


		public function eliminarFunc($fId){

		//si no existe
		if(!ctype_digit($fId)) throw new ValidacionException("Error efunc 1") ;
		//si es menor a uno
		if($fId < 1) throw new ValidacionException("Error efunc 2");
		//se obtienen mas de 1 resultado  ($pId echo ? )
		$this->db->query("SELECT * FROM funcion
						 WHERE id_funcion = $fId ");

		if($this->db->numRows() !=1) throw new ValidacionException("Error efunc 3");
		
		// borro la funcion
		$this->db->query("DELETE FROM funcion WHERE id_funcion = $fId");

		//Borro los asientos asociados 
		$this->db->query("DELETE FROM asiento_funcion WHERE id_funcion IN ($fId)");

		}

	}
?>