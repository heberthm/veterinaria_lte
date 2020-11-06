<?php


 $json = array();


$sql = "SELECT id,  fecha, cliente, telefono, mascota, especie, title, descripcion, medico, start, end, hora_ini, hora_fin, color FROM events ";

 try {

   require('../vistas/plugins/calendar/bdd.php');

 } catch(Exception $e) {
    exit('Unable to connect to database.');
 }


 $result = $bdd->query($sql) or die(print_r($bdd->errorInfo()));


 echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));