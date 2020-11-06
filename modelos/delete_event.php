<?php


$id = $_POST['id'];


try {
	require "conexion.php";
} catch(Exception $e) {
	exit('No se puede hacer conexión a la base de datos.');
}


$sql = "DELETE from events WHERE id=".$id;

$query =Conexion::conectar()->prepare( $sql );
$query->execute();


?>