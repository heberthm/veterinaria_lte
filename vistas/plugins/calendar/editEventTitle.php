<?php

require('../../../modelos/conexion.php');

if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query =Conexion::conectar()->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error al eliminar');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Error al eliminar');
	}
	
}elseif (isset($_POST['cliente'])  && isset($_POST['mascota'])  && isset($_POST['especie'])   && isset($_POST['color']) && isset($_POST['id'])){
	
	$id            = $_POST['id'];
	$cliente       = $_POST['cliente'];
	$mascota       = $_POST['mascota'];
	$especie       = $_POST['especie'];
	$title         = $_POST['title'];
	$medico        = $_POST['CboMedico'];
	$descripcion   = $_POST['descripcion'];
	$telefono      = $_POST['telefono'];
	$color         = $_POST['color'];



   
 
	
	$sql = "UPDATE events SET  cliente = '$cliente', mascota = '$mascota',  especie = '$especie', telefono = '$telefono', title = '$title', 
	        descripcion = '$descripcion', medico = '$medico',  color = '$color'  
		    WHERE id = $id ";


/*

 $query->execute();

    while( $array = $query->fetch() ) {

  $row = $query->fetch(PDO::FETCH_ASSOC);

 echo  '<input type="select" name="title" value="'.$row['title']. '">';

*/



	$query = Conexion::conectar()->prepare( $sql );
	  if ($query == false) {
	      print_r($conn->errorInfo());
	      die ('error prepare');
	 }
	    $sth = $query->execute();
	     if ($sth == false) {
	         print_r($query->errorInfo());
	         die ('error execute');
     	}

}
//header('Location: ../vistas/agenda.php');


