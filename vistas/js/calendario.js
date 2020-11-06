
 <?php
require_once('vistas/plugins/calendar/bdd.php');

$sql = "SELECT id,  fecha, cliente, telefono, mascota, especie, title, start, end, hora_ini, hora_fin, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();



?>