<?php


define ('DB_USER', "root");
define ('DB_PASSWORD', "140469");
define ('DB_DATABASE', "veterinaria_lte");
define ('DB_HOST', "localhost");



$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset( $mysqli, 'utf8');


$sql = "SELECT DISTINCT Id_cliente, cedula, nombre, nombre_mascota, edad FROM clientes 
		WHERE cedula = '".$_GET['q']."' OR nombre LIKE '%".$_GET['q']."%'
		LIMIT 10"; 

$result = $mysqli->query($sql);


$json = [];


while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['Id_cliente'], 'text'=>$row['nombre'].' - '. $row['nombre_mascota'].' -  '. $row['edad'] ];
}

mysqli_close($mysqli);

echo json_encode($json, JSON_UNESCAPED_UNICODE);

