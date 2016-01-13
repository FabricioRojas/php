<?php
	class Persona{
		
		private $nif;
		private $fnac;
		private $nombre;
		private $cpostal;
		private static $num_perosnas;
		
		//constructor
		function __construct($nif, $nombre, $cpostal, $fnac){
			$this->nif = $nif;
			$this->fnac = $fnac;
			$this->nombre = $nombre;
			$this->cpostal = $cpostal;
			self::$num_perosnas++;
		}
		public static function getPerosnas(){
			return self::$num_perosnas;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getNif(){
			return $this->nif;
		}
		public function getCPostal(){
			return $this->cpostal;
		}
		public function getFnac(){
			return $this->fnac;
		}
	}
	
	class Estudiante extends Persona{
		private $id;
		private $grupo;
		private $nombre;
		public function __construct($nif, $nombre, $cpostal, $fnac, $id, $grupo){
			//heredar un constructor
			parent::__construct($nif, $nombre, $cpostal, $fnac);
			$this->id = $id;
			$this->grupo = $grupo;
		}
		public function getId(){
			return $this->id;
		}
		public function getGrupo(){
			return $this->grupo;
		}
	}
// 	$persona = new Estudiante("45368554G", "Paco", 32121, "ayer");
// 	$persona1 = new Estudiante("45368556K", "Fabricio", 35116, "14/12/1993");
	$estudiante = new Estudiante("45368554G", "Paco", 32121, "ayer", 3, 1);
	$estudiante1 = new Estudiante("45368556K", "Fabricio", 35116, "14/12/1993", 2, 2);
	$estudiante2 = new Estudiante("45365987G", "Juan", 35124, "hoy", 1, 3);
	
	//array normal
	$arrayEstudiantes = array ($estudiante, $estudiante1, $estudiante2);
	//array con clave - valor
	$arrayEstudiantes1 = array ($estudiante->getId() => $estudiante,
								$estudiante1->getId() => $estudiante1,
								$estudiante2->getId() => $estudiante2);
	
	//recorrer array normal
	goto a;
	foreach ($arrayEstudiantes as $valor) {
	    echo $valor->getNombre();
	}
	a:
	//recorrer array con clave - valor
	$a = $estudiante->getId();
	foreach ($arrayEstudiantes1 as $a => $valor) {
		echo $valor->getNombre();
	}
	
// 	echo "<br>DNI: " . $persona->getNif() . "<br>";
// 	echo "Nombre: " . $persona->getNombre() . "<br>";
// 	echo "Codigo postal: " . $persona->getCPostal() . "<br>";
// 	echo "Fecha nacimiento: " . $persona->getFnac() . "<br>";
// 	echo "<br>";
// 	echo "DNI: " . $persona1->getNif() . "<br>";
// 	echo "Nombre: " . $persona1->getNombre() . "<br>";
// 	echo "Codigo postal: " . $persona1->getCPostal() . "<br>";
// 	echo "Fecha nacimiento: " . $persona1->getFnac() . "<br>";
// 	echo "<br>";
// 	echo "DNI: " . $estudiante->getNif() . "<br>";
// 	echo "Nombre: " . $estudiante->getNombre() . "<br>";
// 	echo "Codigo postal: " . $estudiante->getCPostal() . "<br>";
// 	echo "Fecha nacimiento: " . $estudiante->getFnac() . "<br>";
// 	echo "Identificacion: " . $estudiante->getId() . "<br>";
// 	echo "Grupo: " . $estudiante->getGrupo() . "<br>";
// 	echo "<br>";
// 	echo "Numero perosnas relativo: " . Persona::getPerosnas();
?>