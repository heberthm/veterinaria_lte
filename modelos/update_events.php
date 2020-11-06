
<?php
$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];


try {
 		require "conexion.php";
} catch(Exception $e) {
	exit('No se puede conectar a la base de datos.');
}


$sql = "UPDATE events SET title=?, start=?, end=? WHERE id=?";
$query =Conexion::conectar()->prepare( $sql );
$query->execute(array($title,$start,$end,$id));