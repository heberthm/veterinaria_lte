<?php


$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);


?>

 <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Citas médicas</a></li>
              <li><a href="#tab_2" data-toggle="tab">Citas procedimientos</a></li>
              <li><a href="#tab_3" data-toggle="tab">Citas peluquería</a></li>
              <li><a href="#tab_4" data-toggle="tab">Notificaciones</a></li>
             

   
 <div class="tab-content">
  
 <div class="tab-pane active" id="tab_1"> 

            
                
              <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header fa fa-list  fa-2x"><font style="font-family:Arial, Helvetica, sans-serif">&nbsp; Lista de citas para hoy: &nbsp; <?php setlocale(LC_TIME, 'spanish'); $fecha= strftime("%A %d de %B del %Y")?> <?php echo utf8_encode($fecha)?>   </font></h2>
               </div>
                <!-- /.col-lg-12 -->
            </div>
     

<?php
//include "../modelo/conexion.php";
//include "header.php";
$mysqli = new mysqli("localhost", "root", "140469", "veterinaria");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>





 <div class="container2">
                 <div class="panel-body">
                            <div class="row">
                                
                                  

      
   <div class="panel panel-default">
                    <div class="panel-heading">
                       <i class="fa fa-list fa-fw"></i><strong> Citas médicas para hoy</strong></div>

<div class="table-responsive">
<table  id="ghatable" class=" table table-striped table-hover  table-bordered ">
<thead>
     <tr>
         <tr style="color:#FCF7F7" bgcolor="#09C" align="center" class="Titulo_tabla" >
          
          
          <th>Nombre cliente</th>
           <th>mascota</th>
            <th>Servicio</th> 
           <th>Teléfono</th>
          <th>Hora inicial</th>
          <th>Hora final</th>
         

     </tr>
</thead>
<tbody>
<?php

header ('Content-type: text/html; charset=utf-8');
setlocale(LC_TIME, 'spanish');
//mysql_set_charset('utf8');
$res = $mysqli->query("SELECT * FROM events WHERE fecha = CURDATE() AND servicio IN  ('consulta medica','control medico') ORDER BY start ");
while ($row = $res->fetch_assoc()):
?>
     <tr>
         
         <td><?php echo ucwords(utf8_encode($row['title'])) ?></td>
         <td><?php echo ucwords(utf8_encode($row['mascota'])) ?></td>
         <td><?php echo ucwords(utf8_encode($row['servicio'])) ?></td>
         <td><?php echo ucwords(utf8_encode($row['telefono'])) ?></td>
         <td><?php echo $row['hora_ini'] ?></td>
         <td><?php echo $row['hora_fin'] ?></td>


          
      </tr>
<?php
endwhile;
?>
</tbody>
</table> 






      </div>                
    </div>
   </div>
  </div>
</div>
</div>





  
 <div class="tab-pane" id="tab_2"> 

            
                
              <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header fa fa-list  fa-2x"><font style="font-family:Arial, Helvetica, sans-serif">&nbsp; Lista de procedimientos para hoy: &nbsp; <?php setlocale(LC_TIME, 'spanish'); $fecha= strftime("%A %d de %B del %Y")?> <?php echo utf8_encode($fecha)?>   </font></h2>
               </div>
                <!-- /.col-lg-12 -->
            </div>
     

<?php
//include "../modelo/conexion.php";
//include "header.php";
$mysqli = new mysqli("localhost", "root", "140469", "veterinaria");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>





 <div class="container2">
                 <div class="panel-body">
                            <div class="row">
                                
                                  

      
   <div class="panel panel-default">
                    <div class="panel-heading">
                       <i class="fa fa-list fa-fw"></i><strong> Citas procedimientos para hoy</strong></div>

<div class="table-responsive">
<table  id="ghatable" class=" table table-striped table-hover  table-bordered ">
<thead>
     <tr>
         <tr style="color:#FCF7F7" bgcolor="#09C" align="center" class="Titulo_tabla" >
          
          
          <th>Nombre cliente</th>
           <th>mascota</th>
            <th>Servicio</th> 
           <th>Teléfono</th>
          <th>Hora inicial</th>
          <th>Hora final</th>
         

     </tr>
</thead>
<tbody>
<?php

header ('Content-type: text/html; charset=utf-8');
setlocale(LC_TIME, 'spanish');
//mysql_set_charset('utf8');
$res = $mysqli->query("SELECT * FROM events WHERE fecha = CURDATE() AND  servicio IN ('procedimiento', 'cirugia') ORDER BY start ");
while ($row = $res->fetch_assoc()):
?>
     <tr>
         
         <td><?php echo ucwords(utf8_encode($row['title'])) ?></td>
         <td><?php echo ucwords(utf8_encode($row['mascota'])) ?></td>
         <td><?php echo ucwords(utf8_encode($row['servicio'])) ?></td>
          <td><?php echo ucwords(utf8_encode($row['telefono'])) ?></td>
         <td><?php echo strftime("%I:%M %p ",strtotime($row['start'])) ?></td>
         <td><?php echo strftime("%I:%M %p ",strtotime($row['end'])) ?></td>

          
      </tr>
<?php
endwhile;
?>
</tbody>
</table> 






      </div>                
    </div>
   </div>
  </div>
</div>
</div>





    <div class="tab-pane" id="tab_3">  


                <!--DataTable citas médicas -->
                
                
              <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header fa fa-list  fa-2x"><font style="font-family:Arial, Helvetica, sans-serif">&nbsp; Lista de citas de peluquería para hoy: &nbsp; <?php setlocale(LC_TIME, 'spanish'); $fecha= strftime("%A %d de %B del %Y")?> <?php echo utf8_encode($fecha)?>   </font></h2>
               </div>
                <!-- /.col-lg-12 -->
            </div>
        


   

<?php
//include "../modelo/conexion.php";
//include "header.php";
$mysqli = new mysqli("localhost", "root", "140469", "veterinaria");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>





 <div class="container2">
                 <div class="panel-body">
                            <div class="row">
                                
                                  

      
   <div class="panel panel-default">
                    <div class="panel-heading">
                       <i class="fa fa-list fa-fw"></i><strong> Citas peluquería para hoy</strong></div>

  <div class="table-responsive">
<table  id="ghatable" class=" table table-striped table-hover  table-bordered ">
<thead>
     <tr>
         <tr style="color:#FCF7F7" bgcolor="#09C" align="center" class="Titulo_tabla" >
          
          <th>Hora atención</th>
          <th>Peluquero</th>
          <th>Nombre cliente</th>
          <th>Teléfono</th> 
          <th>Mascota</th>
          <th>Especie</th>
          <th>Baño</th>
          <th>Corte</th>
          <th>Adicional</th>
         

     </tr>
</thead>
<tbody>
<?php

header ('Content-type: text/html; charset=utf-8');
setlocale(LC_TIME, 'spanish');
//mysql_set_charset('utf8');
$res = $mysqli->query("SELECT * FROM peluqueria WHERE fecha = CURDATE() ORDER BY start ASC ");
while ($row = $res->fetch_assoc()):
?>
     <tr>
         
        <td><?php echo strftime("%I:%M %p ",strtotime($row['start'])).' - '.strftime("%I:%M %p ",strtotime($row['end'] )) ?></td>
       
         <td><?php echo ucwords(utf8_encode($row['peluquero'])) ?></td> 
         <td><?php echo ucwords(utf8_encode($row['title'])) ?></td>
         <td><?php echo ucwords(utf8_encode($row['telefono'])) ?></td> 
         <td><?php echo ucwords(utf8_encode($row['nombre_mascota'])) ?></td>
         <td><?php echo ucwords(utf8_encode($row['especie'])) ?></td>
         <td><?php echo  ucwords(utf8_encode($row['bano'])) ?></td>
         <td><?php echo  ucwords(utf8_encode($row['corte'])) ?></td>
         <td><?php echo  ucwords(utf8_encode($row['adicionales'])) ?></td> 

          
      </tr>
<?php
endwhile;
?>
</tbody>
</table>      
   





    </div>
   </div>
  </div>
 </div>
 </div>
</div>




    <div class="tab-pane" id="tab_4">  


                <!--DataTable citas médicas -->
                
                
              <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header fa fa-list  fa-2x"><font style="font-family:Arial, Helvetica, sans-serif"> Lista de notificaciones: &nbsp; <?php setlocale(LC_TIME, 'spanish'); $fecha= strftime("%A %d de %B del %Y")?> <?php echo utf8_encode($fecha)?>   </font></h2>
               </div>
                <!-- /.col-lg-12 -->
            </div>
        


   

<?php
//include "../modelo/conexion.php";
//include "header.php";
$mysqli = new mysqli("localhost", "root", "140469", "veterinaria");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>





 <div class="container2">
                 <div class="panel-body">
                            <div class="row">
                                
                                  

      
   <div class="panel panel-default">
                    <div class="panel-heading">
                       <i class="fa fa-list fa-fw" style="color:red"></i><strong> Notificaciones</strong></div>

  <div class="table-responsive">
<table  id="ghatable" class=" table table-striped table-hover  table-bordered ">
<thead>
     <tr>
         <tr style="color:#FCF7F7" bgcolor="#09C" align="center" class="Titulo_tabla" >
                     
          <th>Fecha última atención</th>
          <th>Fec. Próx. atención</th>
          <th>Cliente</th>
          <th>Teléfono</th>
          <th>mascota</th>
          <th>Especie</th>
          <th>Mensaje</th>
         

     </tr>
</thead>
<tbody>

<?php
header ('Content-type: text/html; charset=utf-8');
setlocale(LC_TIME, 'spanish');
//mysql_set_charset('utf8');
$res = $mysqli->query("SELECT * FROM notificaciones WHERE fecha_notificacion  BETWEEN DATE_SUB( CURDATE( ) +3 ,INTERVAL 3 DAY ) AND CURDATE( ) +3 ORDER BY fecha_notificacion ASC ");
while ($row = $res->fetch_assoc()):
?>
     <tr>
         
         <td><?php echo date("d-m-Y",strtotime($row['fecha_registro'])) ?></td>
         <td><font style="color: red "><?php echo date("d-m-Y",strtotime($row['fecha_notificacion'])) ?></font></td>
         <td><?php echo  ucwords(utf8_encode($row['nombre_cliente'])) ?></td>
         <td><?php echo $row['telefono'] ?></td>
         <td><?php echo $row['nombre_mascota'] ?></td>
         <td><?php echo  $row['especie'] ?></td>
         <td><?php echo  ucwords(utf8_encode($row['mensaje'])) ?></td>
          
      </tr>
<?php
endwhile;
$conn=null;
?>
</tbody>
</table>      
             


     </div>
   </div>
  </div>
 </div>
 </div>
</div>




<script type="text/javascript">
	


 
$(document).ready(function() { 
$('#ghatable').DataTable({
   
   
    "autoWidth": true,
 

  createdRow: function ( row, data, index ) {
  if ( data[4] = 4 ) {
    var content = $('td', row).eq(4).text();
    $('td', row).eq(4).html('<span class="badge badge-warning" title="EL producto está en el stock mínimo">'+content+'</span>')
  }
},

  

    "language": {
    "thousands": ",", 
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          " _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
       "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
      
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      
  },
  
     "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 2
        } ],
        "order": [[ 1, 'asc' ]]
    } );
 
    table.on( 'order.dt search.dt', function () {
        table.column(2, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

 




</script>



     
    
  