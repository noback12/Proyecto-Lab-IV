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


			$sql = "SELECT * FROM asiento_funcion WHERE id_af IN (" . implode(',', $arrayR) . ")";


				//In me permite especificar multiples valores en la clausula Where 
				//Para seleccionar varios ids tendria que hacer WHERE id_af IN(id1,id2,....); pero nose la cantidad de ids que tendre asi que uso implode("," ,) 
				//Implode(",",$Elarray)me separa los valores del array en un string y los separa con la ",". 

			$this->db->query("SELECT * FROM asiento_funcion WHERE id_af IN (" . implode(',', $arrayR) . ")");
			return $this->db->fetchAll();

		}








		
		public function reservar2(array $arrayR){
			/*$this->db->query("SELECT * 
							FROM asiento_funcion
							");
			return $this->db->fetchAll();*/

			$enlace = mysqli_connect("localhost", "root", "", "complejo_cinetp");
			$consulta = "SELECT * 
							FROM asiento_funcion";

			if ($resultado = mysqli_query($enlace, $consulta)) {
			    /* obtener array asociativo */
			    while ($row = mysqli_fetch_assoc($resultado)) {
			        printf ("%s (%s)\n", $row["id_af"], $row["id_asiento"]);
			    }

			    return $resultado ;
			    /* liberar el conjunto de resultados */
			    mysqli_free_result($resultado);
			}

		}

	}
?>