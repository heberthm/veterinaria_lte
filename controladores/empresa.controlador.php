<?php

class ControladorEmpresa{

	/*=============================================
	CREAR EMPRESA
	=============================================*/

	static public function ctrCrearEmpresa(){

		if(isset($_POST["nuevaEmpresa"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaEmpresa"]) &&
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoTelefono"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoCelular"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevoResponsable"]) && 
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevaCiudad"])){

			   	$tabla = "empresa";

			   	$datos = array("empresa"=>$_POST["nuevaEmpresa"],
					           "direccion"=>$_POST["nuevoDireccion"],
					           "telefono"=>$_POST["nuevoTelefono"],
					           "celular"=>$_POST["nuevoCelular"],
					           "ciudad"=>$_POST["nuevaCiudad"],
					           "responsable"=>$_POST["NuevoResponsable"],
					           "email"=>$_POST["nuevoEmail"]);

			   	$respuesta = ModeloEmpresa::mdlIngresarEmpresa($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Los datos de la empresa ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "crear-datos-empresa";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡Los datos de la empresa no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "crear-datos-empresa";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR EMPRESA
	=============================================*/

	static public function ctrMostrarEmpresa($item, $valor){

		$tabla = "empresa";

		$respuesta = ModeloEmpresa::mdlMostrarEmpresa($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function ctrEditarEmpresa(){

		if(isset($_POST["editarEmpresa"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEmpresa"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarDireccion"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarCelular"]) &&  
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarCiudad"]) &&
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarResponsable"]) ){

			   	$tabla = "empresa";

			   	$datos = array("id"=>$_POST["idCliente"],
			   				   "empresa"=>$_POST["editarEmpresa"],
					           "direccion"=>$_POST["editarDireccion"],
					           "telefono"=>$_POST["editarTelefono"],
					           "celular"=>$_POST["editarCelular"],
					           "ciudad"=>$_POST["editarCiudad"],
					           "responsable"=>$_POST["editarResponsable"])
			   	               "email"=>$_POST["editarEmail"],;

			   	$respuesta = ModeloEmpresa::mdlEditarEmpresa($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Los datos de la empresa ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "crear-datos-empresa";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡los datos de la empresa no pueden ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "crear-datos-empresa-";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarEmpresa(){

		if(isset($_GET["idCliente"])){

			$tabla ="empresa";
			$datos = $_GET["idCliente"];

			$respuesta = ModeloEmpresa::mdlEliminarEmpresa($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "Los datos de la empresa  han sido borrados correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then((result) => {
								if (result.value) {

								window.location = "crear-datos-empresa";

								}
							})

				</script>';

			}		

		}

	}

}

