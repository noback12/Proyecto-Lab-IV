<?php

// models/Funciones.php
	class Funciones extends Model {
		
		public function getTodos() {
			$this->db->query("SELECT * FROM funcion");
			return $this->db->fetchAll();
		}

		public function getFuncionesSala($idSala){
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

	}
?>