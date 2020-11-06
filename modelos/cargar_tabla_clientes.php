<?php
// db settings
$hostname = 'localhost';
$username = 'root';
$password = '140469';
$database = 'veterinaria_lte';


$data = [];


// db connection
$con = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($con));
$con -> set_charset("utf8");

// fetch records
$sql = "SELECT * FROM lista_espera WHERE fecha = CURDATE() ORDER BY hora Desc";
$result = mysqli_query($con, $sql);



while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);

