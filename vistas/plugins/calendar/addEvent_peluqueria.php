<?php

// Connexion à la base de données
require_once('bdd.php');
//echo $_POST['title'];
if (  isset($_POST['fecha']) &&  isset($_POST['title']) && isset($_POST['nombre_mascota']) && isset($_POST['especie']) && isset($_POST['peluquero'])   && isset($_POST['telefono'])  && isset($_POST['CboBano']) && isset($_POST['corte']) && isset($_POST['adicionales'])  && isset($_POST['observaciones']) && isset($_POST['start']) && isset($_POST['end'])  && isset($_POST['hora_ini']) && isset($_POST['hora_fin']) ){
	
	
	
	$fecha = date("Y-m-d",strtotime($_POST['start']));
	$title = $_POST['title'];
	$telefono = $_POST['telefono'];
	$nombre_mascota = $_POST['nombre_mascota'];
	$especie = $_POST['especie'];
	$peluquero = $_POST['peluquero'];
	$bano = $_POST['TxtTipo_bano'];
	$valor_bano = $_POST['TxtValor_bano'];
	$corte = $_POST['corte'];
	$adicionales = $_POST['TxtAdicionales'];
	$valor_adicionales = $_POST['TxtValor_adicionales'];
	$observaciones = $_POST['observaciones'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$hora_ini = $_POST['hora_ini'];
	$hora_fin = $_POST['hora_fin'];
	

	$sql = "INSERT INTO peluqueria( fecha, title, telefono, nombre_mascota, especie, peluquero, bano, valor_bano, corte, adicionales, valor_adicionales, observaciones, start, end, hora_ini, hora_fin ) values 
	(  '$fecha', '$title', '$telefono', '$nombre_mascota', '$especie', '$peluquero',  '$bano', '$valor_bano', '$corte', '$adicionales', '$valor_adicionales', '$observaciones', '$start', '$end', '$hora_ini', '$hora_fin')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
echo mysql_error();

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
