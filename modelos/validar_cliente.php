<?php

###### db ##########
$db_host = 'localhost';
$db_username = 'root';
$db_password = '140469';
$db_name = 'veterinaria_lte';
################


if(isset($_POST["TxtCedula"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	//try connect to db
	$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('No se puede conectar a la base de datos');
	
	//trim and lowercase username
	$username = $_POST["TxtCedula"]; 
	
	//sanitize username
	$username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check username in db
	$results = mysqli_query($connecDB,"SELECT cedula FROM clientes WHERE cedula = '$username' ");
	
	//return total count
	$username_exist = mysqli_num_rows($results); //total records
		
	//if value is more than 0, username is not available
	if($username_exist) {
		die('<font color=#F51414; size=5 > El cliente ya existe en la base de datos. No lo cree de nuevo, se duplicará.  </font>');
	
	}else{
		
	   die ('<img src="../vistas/img/varios/available.png">' );
	}
	
	
	//close db connection
	mysqli_close($connecDB);
}
      

?>

