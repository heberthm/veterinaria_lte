<?php
include('conexion.php');



$data = array(
 ':cedula'          => $_POST["TxtCedula"],
 ':nombre'          => $_POST["TxtNombre"],
 ':direccion'       => $_POST["TxtDireccion"],
 ':barrio'          => $_POST["TxtBarrio"], 
 ':telefono'        => $_POST["TxtTelefono"],
 ':celular'         => $_POST["TxtCelular"],
 ':email'           => $_POST["TxtEmail"],
 ':nombre_mascota'  => $_POST["TxtNombre_mascota"],
 ':edad'            => $_POST["TxtEdad"],
 ':especie'         => $_POST["TxtEspecie"],
 ':raza'            => $_POST["TxtRaza"],
 ':sexo'            => $_POST["CboSexo"],
 ':color'           => $_POST["TxtColor"],
 ':peso'            => $_POST["TxtPeso"],
 ':especie'         => $_POST["TxtEspecie"],
 ':estado'         =>  $_POST["CboEstado"]

); 



$stmt = Conexion::conectar()->prepare(" INSERT INTO clientes (cedula, nombre, direccion, barrio, telefono, celular, email, nombre_mascota, edad, especie, raza, sexo, color, peso, 
                                      estado) 
            VALUES ( :cedula, :nombre, :direccion, :barrio, :telefono, :celular, :email, :nombre_mascota, :edad, :especie, :raza, :sexo, :color, :peso, :estado)");


if($stmt->execute($data))
{
 $output = array(
 
        $stmt->bindParam(":cedula", $datos["TxtCedula"], PDO::PARAM_INT),
        $stmt->bindParam(":nombre", $datos["TxtNombre"], PDO::PARAM_STR),
        $stmt->bindParam(":direccion", $datos["TxtDireccion"], PDO::PARAM_STR),
        $stmt->bindParam(":barrio", $datos["TxtBarrio"], PDO::PARAM_STR),
        $stmt->bindParam(":telefono", $datos["TxtTelefono"], PDO::PARAM_STR),
        $stmt->bindParam(":email", $datos["TxtEmail"], PDO::PARAM_STR),

        $stmt->bindParam(":nombre_mascota", $datos["TxtNombre_mascota"], PDO::PARAM_STR),
        $stmt->bindParam(":edad", $datos["TxtEdad"], PDO::PARAM_STR),
        $stmt->bindParam(":especie", $datos["TxtEspecie"], PDO::PARAM_STR),
        $stmt->bindParam(":raza", $datos["TxtRaza"], PDO::PARAM_STR),
        $stmt->bindParam(":sexo", $datos["TxtSexo"], PDO::PARAM_STR),
        $stmt->bindParam(":color", $datos["TxtColor"], PDO::PARAM_STR),
        $stmt->bindParam(":peso", $datos["TxtPeso"], PDO::PARAM_STR),
        $stmt->bindParam(":estado", $datos["TxtEstado"], PDO::PARAM_STR),


  

 );

 echo json_encode($output);
}

