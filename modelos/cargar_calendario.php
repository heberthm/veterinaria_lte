 <?php
// require_once('vistas/plugins/calendar/bdd.php');

$sql = "SELECT id,  fecha, cliente, telefono, mascota, especie, title, start, end, hora_ini, hora_fin, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();




//load.php

$connect = new PDO('mysql:host=localhost;dbname=veterinaria_lte', 'root', '140469');

$data = array();

$query = "SELECT id,  fecha, cliente, telefono, mascota, especie, title, start, end, hora_ini, hora_fin, color FROM events";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'            => $row["id"],
  'cliente'       => $row["cliente"],
  'fecha'         => $row["fecha"],
  'mascota'       => $row["mascota"],
  'especie'       => $row["especie"],
  'telefono'      => $row["telefono"],
  'medico'        => $row["medico"],
  'descripcion'   => $row["descripcion"],
  'start'         => $row["start"], 
  'end'           => $row["end"],
  'color'         => $row["color"]


 );
}

echo json_encode($data);





?>