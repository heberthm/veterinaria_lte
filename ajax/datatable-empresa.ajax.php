<?php

require_once "../controladores/crear-datos-empresa.controlador.php";
require_once "../modelos/crear-datos-empresa.modelo.php";

class TablaEmpresa{

  /*=============================================
  MOSTRAR LA TABLA DE EMPRESA
  =============================================*/ 

 static public function mostrarTabla(){

  	$item = null;
    $valor = null;

  	$empresa = ControladorEmpresa::ctrMostrarEmpresa($item, $valor);

  	echo '{
			"data": [';

			for($i = 0; $i < count($empresa)-1; $i++){

				
				 echo '[
			      "'.($i+1).'",
			      "'.$empresa[$i]["ruta_imagen"].'",
			      "'.$empresa[$i]["empresa"].'",
			      "'.$empresa[$i]["direccion"].'",
			      "'.$empresa[$i]["telefono"].'",
			      "'.$empresa[$i]["celular"].'",
			      "'.$empresa[$i]["ciudad"].'",
			      "'.$empresa[$i]["responsable"].'",
			      "'.$empresa[$i]["email"].'"

			    ],';

			}

			   echo'[
			      "'.count($empresa).'",
			      "'.$empresa[count($empresa)-1]["ruta_imagen"].'",
			      "'.$empresa[count($empresa)-1]["empresa"].'",
			      "'.$empresa[count($empresa)-1]["direccion"].'",
			      "'.$empresa[count($empresa)-1]["telefono"].'",
			      "'.$empresa[count($empresa)-1]["celular"].'",
			      "'.$empresa[count($empresa)-1]["ciudad"].'",
			      "'.$empresa[count($empresa)-1]["responsable"].'",
			      "'.$empresa[count($empresa)-1]["email"].'"    
			    ]
			]
		}';


  }


}

/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activar = new TablaEmpresa();
$activar -> mostrarTabla();





