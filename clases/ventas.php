<?php 

class ventas{
	public function obtenDatosProducto($Id_cliente){
		$c=new conectar();
		$conexion=$c->conexion();

        mysqli_set_charset( $conexion, 'utf8');
		

		$sql="SELECT Id_cliente, cedula, nombre, nombre_mascota, telefono, celular 
		FROM clientes 
		WHERE Id_cliente = '$Id_cliente'";

		$result=mysqli_query($conexion,$sql);

		$row=mysqli_fetch_row($result);
	
		$data=array(
			'Id_cliente'     => $row[0],
          	'cedula'         => $row[1],
			'nombre'         => $row[2],
				
			'nombre_mascota' => $row[3],
			'telefono'       => $row[4],
			'celular'        => $row[5]
		);		
		return $data;
	}
}
