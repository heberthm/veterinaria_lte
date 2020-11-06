<?php
// List of events
 $json = array();

// connection to the database
 require_once 'conexion.php';

 // Query that retrieves events
 $stmt = Conexion::conectar()->prepare ("SELECT * FROM events ORDER BY id");

 
 $stmt ->execute();


 // sending the encoded result to success page
 echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

