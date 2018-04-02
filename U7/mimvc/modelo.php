<?php
// Clase BD: Trabaja con una base de datos concreta
class BD{
	// Atributo de la clase
	private $conexion;

	// Metodos de la clase
	public function conecta(){
		$this->conexion = new mysqli('127.0.0.1', 'toni', 'toni', 'gente');
	}

	public function desconecta(){
		$this->conexion->close();
	}

	public function ejecuta($sql){
		return $this->conexion->query($sql);
	}
}

?>