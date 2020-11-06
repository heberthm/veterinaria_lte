
<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=veterinaria_lte", "root", "140469");

$data = array(
 ':hora'            => $_POST["hora"],	
 ':nombre_cliente'  => $_POST["nombre_cliente"],
 ':nombre_mascota'  => $_POST["nombre_mascota"],
 ':medico'          => $_POST["medico"]
); 

$query = "
 INSERT INTO lista_de_espera
       (hora, nombre_cliente, nombre_mascota, medico) 
VALUES (:hora, :nombre_cliente, :nombre_mascota, :medico)";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 $output = array(
  'hora'            => $_POST['hora'],
  'nombre_cliente'  => $_POST['nombre_cliente'],
  'nombre_mascota'  => $_POST['nombre_mascota'],
  'medico'          => $_POST['medico']
 );

 echo json_encode($output);
}