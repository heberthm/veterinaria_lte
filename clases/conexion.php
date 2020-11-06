<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $password="140469";
		private $bd="veterinaria_lte";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}


 ?>