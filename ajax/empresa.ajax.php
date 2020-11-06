<?php

require_once "../controladores/crear-datos-empresa.controlador.php";
require_once "../modelos/crear-datos-empresa.modelo.php";



class AjaxEmpresa{

  /*=============================================
  GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
  =============================================*/
  public $idCliente;

  public function ajaxCrearEmpresa(){

  	$item = "idCliente";
  	$valor = $this->idCliente;
    $orden = null;

  	$respuesta = ControladorEmpresa::ctrMostrarEmpresa($item, $valor, $orden);

  	echo json_encode($respuesta);

  }



  /*=============================================
  MOSTRAR EMPRESA
  =============================================*/
  public $idCliente;

  public function ajaxCrearEMpresa(){

    $item = "idCliente";
    $valor = $this->idCliente;
    $orden = null;

    $respuesta = ControladorEmpresa::ctrMostrarEmpresa($item, $valor, $orden);

    echo json_encode($respuesta);

  }




  /*=============================================
  EDITAR PRODUCTO
  =============================================*/ 

  public $idProducto;
  public $traerProductos;
  public $nombreProducto;

  public function ajaxEditarProducto(){

    if($this->traerProductos == "ok"){

      $item = null;
      $valor = null;
      $orden = "id";

      $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

      echo json_encode($respuesta);


    }else if($this->nombreProducto != ""){

      $item = "descripcion";
      $valor = $this->nombreProducto;
      $orden = null;

      $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

      echo json_encode($respuesta);

    }else{

      $item = "id";
      $valor = $this->idProducto;
      $orden = null;

      $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

      echo json_encode($respuesta);

    }

  }

}


/*=============================================
GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
=============================================*/	

if(isset($_POST["idCategoria"])){

	$codigoProducto = new AjaxProductos();
	$codigoProducto -> idCategoria = $_POST["idCategoria"];
	$codigoProducto -> ajaxCrearCodigoProducto();

}
/*=============================================
EDITAR PRODUCTO
=============================================*/ 

if(isset($_POST["idProducto"])){

  $editarProducto = new AjaxProductos();
  $editarProducto -> idProducto = $_POST["idProducto"];
  $editarProducto -> ajaxEditarProducto();

}

/*=============================================
TRAER PRODUCTO
=============================================*/ 

if(isset($_POST["traerProductos"])){

  $traerProductos = new AjaxProductos();
  $traerProductos -> traerProductos = $_POST["traerProductos"];
  $traerProductos -> ajaxEditarProducto();

}

/*=============================================
TRAER PRODUCTO
=============================================*/ 

if(isset($_POST["nombreProducto"])){

  $traerProductos = new AjaxProductos();
  $traerProductos -> nombreProducto = $_POST["nombreProducto"];
  $traerProductos -> ajaxEditarProducto();

}






