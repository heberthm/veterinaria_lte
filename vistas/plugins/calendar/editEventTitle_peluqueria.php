<?php

require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM peluqueria WHERE id_peluqueria = '$id'";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('error prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('error execute');
	}
	
}elseif (isset($_POST['especie']) && isset($_POST['title']) && isset($_POST['telefono']) && isset($_POST['especie']) && isset($_POST['nombre_mascota']) && isset($_POST['peluquero']) && isset($_POST['bano']) && isset($_POST['corte']) 
	&& isset($_POST['adicionales'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$especie = $_POST['especie'];
	$telefono = $_POST['telefono'];
	$peluquero = $_POST['peluquero'];
	$nombre_mascota = $_POST['nombre_mascota'];
	$adicionales = $_POST['adicionales'];
	$bano = $_POST['bano'];
	$corte = $_POST['corte'];
	$observaciones = $_POST['observaciones'];

	
	$sql = "UPDATE peluqueria SET title = '$title',  telefono = '$telefono', nombre_mascota = '$nombre_mascota',  
	        especie = '$especie', peluquero = '$peluquero',  bano = '$bano', corte = '$corte', adicionales = '$adicionales', observaciones = '$observaciones'  
		    WHERE id_peluqueria = '$id' ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('error execute');
	}

}
header('Location: ../vistas/agenda_peluqueria.php');
	
?>
