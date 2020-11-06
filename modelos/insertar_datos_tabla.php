<?php

require_once 'conexion.php';


$data = array(
 ':Id_cliente'      => $_POST["Id_cliente"],	
 ':cedula'          => $_POST["cedula"],
 ':nombre'          => $_POST["nombre_cliente"],
 ':nombre_mascota'  => $_POST["nombre_mascota"],
 ':telefono'        => $_POST["telefono"],
 ':celular'         => $_POST["celular"],
 ':medico'          => $_POST["medico"]

); 

$stmt = Conexion::conectar()->prepare(" INSERT INTO lista_espera (Id_cliente, cedula, nombre, nombre_mascota, telefono, celular,  medico) 
                                        VALUES (:Id_cliente, :cedula, :nombre, :nombre_mascota, :telefono, :celular, :medico)");




if($stmt->execute($data))
{
 $output = array(
  'Id_cliente'      => $_POST['Id_cliente'],
  'cedula'          => $_POST['cedula'],
  'nombre'          => $_POST['nombre_cliente'],
  'nombre_mascota'  => $_POST['nombre_mascota'],
  'telefono'        => $_POST['telefono'],
  'celular'         => $_POST['celular'],
  'medico'          => $_POST['medico']
  

 );

 echo json_encode($output);
}