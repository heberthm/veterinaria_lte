<?php

define ('DB_USER', "root");
define ('DB_PASSWORD', "140469");
define ('DB_DATABASE', "veterinaria_lte");
define ('DB_HOST', "localhost");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($mysqli, "utf8");
$sql = "SELECT Id_cliente,  nombre FROM clientes
		WHERE nombre LIKE '%".$_GET['q']."%' 
		LIMIT 10"; 
$result = $mysqli->query($sql);
$json = [];
while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['Id_cliente'], 'text'=>$row['nombre']];
}
echo json_encode($json);

