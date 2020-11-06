<?php

include('conexion.php');



	$stmt = Conexion::conectar()->prepare("DELETE FROM lista_espera WHERE Id_cliente = :Id_cliente");
	$result = $stmt->execute(
		array(
			':Id_cliente'	=>	$_POST["Id_cliente"]
		)
	);
	
 if ($stmt) 
        {
			$response['status']  = 'success';
			$response['message'] = 'registro eliminado correctamente ...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'No se puede eliminar el registro ...';
		}
		echo json_encode($response);
 
		
 






