/*=============================================
EDITAR CLIENTE
=============================================*/

$(".tablaEmpresa").on("click", ".btnEditarEmpresa", function(){

	var idCliente = $(this).attr("idCliente");

	var datos = new FormData();
    datos.append("idCliente", idCliente);

    $.ajax({

      url:"ajax/empresa.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idCliente").val(respuesta["idCliente"]);
	       $("#editarEmpresa").val(respuesta["empresa"]);
	       $("#editardireccion").val(respuesta["direccion"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarCelular").val(respuesta["celular"]);
	       $("#editarCiudad").val(respuesta["ciudad"]);
         $("#editarEmail").val(respuesta["email"]);
         $("#editarResponsable").val(respuesta["responsable"]);
	  }

  	})

})

/*=============================================
ELIMINAR CLIENTE
=============================================*/

$(".tablas").on("click", ".btnEliminarEmpresa", function(){

	var idCliente = $(this).attr("idCliente");
	
	swal({
        title: '¿Está seguro de borrar los datos de la empresa?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar cliente!'
      }).then((result) => {
        if (result.value) {
          
            window.location = "index.php?ruta=clientes&idCliente="+idCliente;
        }

  })

})