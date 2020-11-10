<?php

// Connexion à la base de données
require_once('../../../modelos/conexion.php');


//echo $_POST['title'];
if (isset($_POST['fecha']) &&  isset($_POST['cliente']) && isset($_POST['mascota']) && isset($_POST['especie'])  && isset($_POST['telefono']) && isset($_POST['CboMedico'])   && isset($_POST['title']) && isset($_POST['descripcion'])  && isset($_POST['color'])  && isset($_POST['start']) && isset($_POST['end'])  && isset($_POST['hora_ini']) && isset($_POST['hora_fin']) ){
	
	

$data = array(
 ':fecha'           => date("Y-m-d",strtotime($_POST["start"])),
 ':cliente'         => $_POST["cliente"],
 ':mascota'         => $_POST["mascota"],
 ':especie'         => $_POST["especie"],
 ':telefono'        => $_POST["telefono"],
 ':title'           => $_POST["title"],
 ':medico'          => $_POST["CboMedico"],
 ':color'           => $_POST["color"],
 ':descripcion'     => $_POST["descripcion"],
 ':start'           => $_POST["start"],
 ':end'             => $_POST["end"],
 ':hora_ini'        => $_POST["hora_ini"],
 ':hora_fin'        => $_POST["hora_fin"]

); 


$query = "INSERT INTO events( fecha, cliente, mascota, especie, telefono, title, descripcion, medico, color, start, end, hora_ini, hora_fin ) values 
    	(:fecha, :cliente, :mascota, :especie, :telefono, :title, :descripcion, :medico, :color, :start, :end, :hora_ini, :hora_fin)";



$statement = Conexion::conectar()->prepare($query);

if($statement->execute($data))
{
 $output = array(
 'fecha'           => date("Y-m-d",strtotime($_POST["start"])),
 'cliente'         => $_POST["cliente"],
 'mascota'         => $_POST["mascota"],
 'especie'         => $_POST["especie"],
 'telefono'        => $_POST["telefono"],
 'title'           => $_POST["title"],
 'medico'          => $_POST["CboMedico"],
 'color'           => $_POST["color"],
 'descripcion'     => $_POST["descripcion"],
 'start'           => $_POST["start"],
 'end'             => $_POST["end"],
 'hora_ini'        => $_POST["hora_ini"],
 'hora_fin'        => $_POST["hora_fin"]
  

 );

 echo json_encode($output);
 }
}

// header('Location: ../vistas/agenda.php');
