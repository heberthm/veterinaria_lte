<?php

require_once "conexion.php";

class ModeloClientes{

	/*=============================================
	CREAR CLIENTE
	=============================================*/

	static public function mdlIngresarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( cedula, nombre, direccion, barrio, telefono, celular,  email, nombre_mascota, edad, especie, raza, sexo, color, peso, estado) VALUES (:cedula :nombre, :direccion, :barrio, :telefono, :celular, :email, :nombre_mascota, :edad, :especie, :raza, :sexo, :color, :peso, :estado)");

		$stmt->bindParam(":cedula", $datos["TxtCedula"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["TxtNombre"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["TxtDireccion"], PDO::PARAM_STR);
		$stmt->bindParam(":barrio", $datos["TxtBarrio"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["TxtTelefono"], PDO::PARAM_STR);
		$stmt->bindParam(":celular", $datos["TxtCelular"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["TxtEmail"], PDO::PARAM_STR);

		$stmt->bindParam(":nombre_mascota", $datos["TxtNombre_mascota"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["TxtEdad"], PDO::PARAM_STR);
		$stmt->bindParam(":especie", $datos["TxtEspecie"], PDO::PARAM_STR);
		$stmt->bindParam(":raza", $datos["TxtRaza"], PDO::PARAM_STR);
		$stmt->bindParam(":sexo", $datos["TxtSexo"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["TxtColor"], PDO::PARAM_STR);
		$stmt->bindParam(":peso", $datos["TxtPeso"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["TxtEstado"], PDO::PARAM_STR);

		
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function mdlEditarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, documento = :documento, email = :email, telefono = :telefono, direccion = :direccion, fecha_nacimiento = :fecha_nacimiento WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function mdlEliminarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR CLIENTE
	=============================================*/

	static public function mdlActualizarCliente($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}