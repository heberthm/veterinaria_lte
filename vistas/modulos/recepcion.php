<?php
session_start();

?>

 

<!-- <link rel="stylesheet" href="vistas/dist/css/estilos_generales.css"> -->

<style type="text/css">
 
.mostrar_inputs{
  display: none;
}


.select2 {
width:100%!important;
}

          

  .panel2 .panel-body {
      background: #F2F2F2;
  }
  
  .panel2 .panel-heading {
      background-image: none !important;
      background-color: #BED0D8 !important;
  }
  
  .navbar-brand {
      padding: 0px;
  }
  
  .navbar-brand img {
      height: 125%;
      padding: 15px;
      width: auto;
  }


  #info3 {
      font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
      size: 20px;
      font-weight: bold;
      color: #900;
  }
  



.modal-backdrop.in { 
  z-index: auto; 
  background-color: transparent; 
}



#loading{
  display:none;
  position:absolute;
    top:50%;
   left:35%;
    z-index:1000;
}


.fc-scroller {
  height: 300px !important;
  overflow-y: auto! important;
 
}


</style>




<div class="content-wrapper">

  
 <!-- content-header -->
  <section class="content-header">
    
      <h1>
         Recepción
         <small>Ingreso de pacientes </small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Recepción</li>

      </ol>

  </section>
    



<!--======================================
 
MOSTRAR CAJAS SUPERIORES DE INFORMACIÓN

========================================-->



   <?php

      // if($_SESSION["perfil"] =="Administrador"){

     //   include "inicio/cajas-superiores.php";

     // }

     
   ?>





<!--=====================================

FORMULARIO BUSCAR CLIENTES

======================================-->




<section class="content">

   <div class="row">
      
<div class="col-lg-8">

   <div class="box box-default">
  
            <div class="box-header with-border">
               <i class="fa fa-search fa-fw"></i>Buscar clientes registrados

                <div class="box-tools pull-right">
               
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars" style="color:green"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ver listado cliente</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

               </div>              


            </div>
  

      <div class="box-body">


           <div class="row">
                    
                    <br> 

                    <div class="col-lg-6">
                     
                        <select class="form-control buscar_2" id="buscar_2" autofocus tabindex="1" required></select>
                    </div>
            
            
                  
                
                       <div class="col-lg-4">
                           
                               <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarCliente" style="text-align:left"><span class="fa fa-user fa-fw" tabindex="3"></span> Agregar cliente nuevo</button>

                                <input type="hidden" name="TxtPerfil" id="TxtPerfil"  value="<?php echo ucwords(@$_SESSION["perfil"])?>">
                           


                       </div>
                
              </div>

           </div>
<br> 
            <!-- /.box-body -->
      </div>
          <!-- /.box -->
        



<!-- ====================================

FORMULARIO RECEPCION DE PACIENTES

=========================================  -->

        
          <div class="box box-dafault">
           
                     
             <div class="box-header with-border">
                   <i class="fa fa-list fa-fw"></i>Agregar a lista de espera
              </div>

         
            <!-- /.box-header -->
            <div class="box-body">
               
         <form id="form_clientes" name="form_clientes" method="POST">
            <!--  SELECT2 PARA LOS CLIENTES -->
           <div class="row">
               <div class="col-lg-7">
                  <div class="form-group">
                     <label>Buscar cliente</label>
                     <select class="form-control buscar_clientes" id="buscar_clientes" autofocus tabindex="1"> </select>
                  </div>
               </div>
               <!-- SSELECT BUSCAR MÉDICOS  -->        
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="CboMedico">Seleccionar responsable</label>
                     <select class="form-control text-capitalize"  name="CboMedico" id="CboMedico" tabindex="2" onkeypress="return handleEnter(this, event)" required>
                        <option value="" selected="selected" style='color: #cccccc'></option>
                        <?php
                           define ('DB_USER', "root");
                           define ('DB_PASSWORD', "140469");
                           define ('DB_DATABASE', "veterinaria");
                           define ('DB_HOST', "localhost");
                           
                           $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
                           mysqli_set_charset( $mysqli, 'utf8');
                           
                                     $query = $mysqli -> query ("SELECT id_veterinario, nombre FROM veterinario");
                           
                                     while ($valores = mysqli_fetch_array($query)) {
                           
                                       echo '<option value="'.$valores[id_veterinario].' '.$valores[nombre].'">'.$valores[nombre].'</option>';
                           
                              }
                            ?>
                     </select>
                  </div>
               </div>
            </div>
           <div class="container">
               <div class="row">
                  <input type="hidden" name="TxtPerfil" id="TxtPerfil"  value=" <?php echo ucwords(@$_SESSION["perfil"])?>">
                  <div id="example" class="mostrar_inputs"> 
                     <input type="text" id="medico" name="medico">
                     <input type="hidden" id="id_registro" name="id_medico">
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="Id_cliente">Id cliente</label>
                           <input type="text" name="Id_cliente" id="Id_cliente" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off" readonly>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="cedula">Cédula</label>
                           <input type="text" name="cedula" id="cedula" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off" readonly>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="nombre_cliente">cliente</label>
                           <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off" readonly>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="nombre_mascota">mascota</label>
                           <input type="text" name="nombre_mascota" id="nombre_mascota" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off" readonly>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="telefono">Teléfono</label>
                           <input type="text" name="telefono" id="telefono" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off" readonly>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="Celular">Celular</label>
                           <input type="text" name="celular" id="celular" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off" readonly>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label for="Hora">Hora llegada</label>
                           <input type="text" name="TxtHora" id="TxtHora" class="form-control" onfocus="window.document.form_reloj.reloj.blur()">
                        </div>
                     </div>
                     <input type="hidden" name="TxtFecha" <?php $fecha = date( "Y-m-d")?> value="<?php echo $fecha?>">
                  </div>
                  <!-- BOTONES PARA AGREGAR CLIENTES A LISTA DE ESPERA Y CLIENTES NUEVOS -->
                  <button type="submit" name="agregar" id="agregar" class="btn btn-primary" style="text-align:left; disabled"><span class="fa fa-list fa-fw" tabindex="2"></span> Agregar a lista de espera</button>
                  <button class="btn btn-info" data-toggle="modal" data-target="#modalAgregarCliente" style="text-align:left"><span class="fa fa-user fa-fw" ></span> Agregar cliente nuevo</button>
         </form>
         <br> <br> 
         <!-- DATATABLE LISTA DE ESPERA-->
         <div class="row">
             <div class="col-lg-8">
               <div class="form-group">
                 <table id="table_data" class="table table-striped table-bordered dt-responsive" width="100%">
                     <thead>
                        <tr>
                           <tr style="color:#FFFFFF" bgcolor="#719ca5" align="center" class="Titulo_tabla" >
                           <th>No.</th>
                           <th>Id</th>
                           <th>Cliente</th>
                           <th>Mascota</th>
                           <th>Hora llegada</th>
                           <th>Responsable</th>
                           <th></th>
                        </tr>
                      </tr>  
                   </thead>
                </table>
             </div>
           </div>
         </div>
        </div>
      </div>
     </div>

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->







<!-- ===============================================

AGENDAS DE CITAS

=================================================== -->

  
       <div class="col-md-4">
 
      <div class="box">

         <div class="box-header with-border">


            <i class="fa fa-calendar fa-fw"></i> Citas programadas
                  <div class="btn-group pull-right">
                      <button type="button" class="btn btn-danger btn-sm abrir_fullCalendar" data-toggle="modal" data-target="#agenda_modal" style="margin-top: -4px;" >
                          Agendar citas
                      </button>
               
                  </div>
         </div>        

           <div class="box-body">

                 <div id="calendar"></div> 
                 <div id="loading" style="display:none;">
                 <img id="loading-image" src="vistas/img/varios/loader.gif" alt="Loading..." /> </div> 
      
        
          </div>
    </div> 
 </div> 








<!-- ===========================================

LISTA DE PACIENTES HOSPITALIZADOS

===============================================  -->



         <div class="col-md-4"> 

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
          
            <div class="box-header with-border">
          
             <i class="fa fa-medkit fa-fw"></i> Pacientes hospitalizados

             
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
                 <div class="form-group">
                          
                     
                
                           
                           <table id="table_data2" class="table table-striped table-bordered dt-responsive" width="100%">

                              <thead>
                              
                                  <tr>
                                      <tr style="color:#FFFFFF" bgcolor="#719ca5" align="center" class="Titulo_tabla">

                                          <th>No.</th>
                                          <th>Cliente</th>
                                          <th>Mascota</th>
                                          <th>Ingreso</th>
                                          <th></th>
                                         
                                      </tr>
                                   </tr>    
                           
                              </thead>

                                       <tr>
                                          <td>1</td>
                                          <td>Martha Janeth Osorio</td>
                                          <td>Astro</td>
                                          <td>23-jun-2020</td> 
                                          <td></td> 
                                      </tr>


                                         <tr>
                                          <td>1</td>
                                          <td>Eduardo Lopera Heredia</td>
                                          <td>Fifo</td>
                                          <td>01-Ago-2020</td> 
                                          <td></td> 
                                      </tr>



                                       <tr>
                                          <td>1</td>
                                          <td>Diana Milena Sierra</td>
                                          <td>pepe</td>
                                          <td>13-Ene-2020</td> 
                                          <td></td> 
                                      </tr>


                          </table>


                </div>
     
            </div>
     
          </div>
     
      </div>
        <!-- /.col -->
    </div>
   <!-- /.row -->







</section>






<!-- ==========================================

VENTANA MODAL FULLCALENDAR

============================================ -->


   <div id="agenda_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">
         
                <div class="modal-dialog ">
                    <div class="modal-content" style="width: auto;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><span class="fa fa-calendar"></span> Calendario de citas</h4>
                        </div>
                          <div class="panel-body">

                               <div id="#loading"></div>

                                <div id="fullCalModal"></div>


                           
                            </div>

                       

            <div class="modal-footer">
           

            <!--  <input type="submit" name="BtnGuardar" id="BtnGuardar" class="btn btn-primary" value="Guardar" /> -->
            
              <button type="button" id="cerrar_modal" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
            
            </div>
       
        </div>
   
    </div>

  </div>

</div>

</div>


<!-- ===============================================

VENTANA MODAL EDITAR DATOS DEL CALENDARIO

==================================================== -->


  <!-- Modal -->
    <div class="modal " id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form class="form-horizontal" id="editar_calendario" method="POST">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-pencil"></span> Editar cita</h4>
        </div>
        <div class="modal-body">
        
    
     <div class="form-group"> 
              <label for="title" class="col-sm-2 control-label">Cliente</label>
         <div class="col-sm-10">
              <input type="text" name="title" class="form-control text-capitalize" id="cliente" >
        </div>
     </div>
                  
                  

     <div class="form-group"> 
            <label for="mascota" class="col-sm-2 control-label">Mascota</label>
         <div class="col-sm-10">
            <input type="text" name="mascota" class="form-control text-capitalize" id="mascota" >
        </div>
     </div>
                   
         
    <div class="form-group"> 
           <label for="especie" class="col-sm-2 control-label">especie</label>
        <div class="col-sm-10">
           <input type="text" name="especie" class="form-control text-capitalize" id="especie" >
       </div>
    </div>
                          


   <div class="form-group">
          <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="telefono" class="form-control" id="telefono" >
        </div>
   </div>
                  
                  
                             
  <div class="form-group">
         <label for="descripcion" class="col-sm-2 control-label">descripción</label>
      <div class="col-sm-10">
         <input type="text" name="title" class="form-control text-capitalize" id="title" placeholder="descripción ">
      </div>
   </div>
                 

              
                  
   <div class="form-group">
         <label for="servicio" class="col-sm-2 control-label">Servicio</label>
      <div class="col-sm-10">
          <select class="form-control text-capitalize" name="title" id="title"  tabindex="4"   onkeypress="return handleEnter(this, event)" 
                   required="required" autocomplete="off" >
 
                <option value="" selected="selected"></option> 
                <option value="consulta medica"  data-typdv="0C6FA4" >Consulta médica</option>
                <option value="Procedimiento"    data-typdv="#0CA46A" >Procedimiento</option> 
                <option value="Control médico"   data-typdv="#840CA4" >Control médico</option>
                <option value="Cirugía"          data-typdv="#D51051"  >Cirugía</option>
                <option value="Todo el dia"      data-typdv="#FF8C00" >Todo el día</option> 
  
        </select>
                     
      </div>        
   </div>

                  
                            
  <div class="form-group">
      <label for="color" class="col-sm-2 control-label">Color</label>
    <div class="col-sm-10">
      <select name="color" class="form-control" id="color">
          <option value="">Seleccionar Servicio</option>
          <option style="color:#0071c5;" value="EB5C6A">&#9724;  Azul   - Consulta médica</option>
          <option style="color:#008000;" value="#008000">&#9724; Verde  - Procedimiento</option>              
          <option style="color: #C66;" value="#C66">&#9724;      Rojo   - Cirugía</option>
          <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange - Todo el día </option>
      </select>
    </div>
 </div>
      
                
       
            
                                
         <div class="form-group">
         <label for="start" class="col-sm-2 control-label">fecha ini.</label>
      <div class="col-sm-10">
     <input type="text" name="start" class="form-control" id="start" readonly >
          </div>
          </div>
                  
                  
          <div class="form-group">
         <label for="start" class="col-sm-2 control-label">fecha fin.</label>
      <div class="col-sm-10">
     <input type="text" name="end" class="form-control" id="end" readonly >
          </div>
          </div>         
            
            
                  <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
              <label class="text-danger" style="color:#060606; background:#F1B8A4;" ><input type="checkbox"  name="delete"> Eliminar cita</label>
              </div>
            </div>
          </div>
          
          <input type="hidden" name="id" class="form-control" id="id">
        
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
      </div>
    </div>
    
    </div>








<!-- ============================================

VENTANA MODAL AGREGAR DATOS AL CALENDARIO

================================================ -->




<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


   
    <div class="modal-dialog" role="document">
   

       <form  method="POST" id="Insertar_fullcalendar">

         <div class="modal-content">
        
       
    
        
     
          
        <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
        
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-calendar abrir_calendario"></span>  Agregar cita</h4>
        
        </div>
        
        <div class="modal-body">
              
   <!--           
     <div class="form-group">
        <label for="cedula" class="col-sm-2 control-label">Cédula</label>
       <div class="col-sm-10">
     <input type="text" name="cedula"  id="cedula" class="typeahead form-control"  onkeyup="format(this)"   required placeholder="Cédula cliente " autofocus autocomplete="off">
          </div>
          </div>
   -->
  
  <div class="row">                        
  
    <div class="col-md-6">
      
        <div class="form-group">
        
           <label for="title" class="control-label">Cliente</label>
          
             
            <input type="text" name="cliente" class="typeahead form-control text-capitalize"  id="cliente" required  autofocus="autofocus" autocomplete="off">
       
          </div>
       
       </div>
  
                  
  
    <div class="col-md-3">

       <div class="form-group">
         
             <label for="Mascota" class="control-label">mascota</label>
         
             <input type="text" name="mascota" class="typeahead form-control text-capitalize"  id="mascota" required  autocomplete="off">
         
         </div>
      </div>    
   



 <div class="col-md-3">

   <div class="form-group">
     
         <label for="Especie" class="control-label">Especie</label>
      
         <input type="text" name="especie" class="typeahead form-control text-capitalize"  id="especie" required  autocomplete="off">
     
      </div>
   </div>    
 



<div class="col-md-3">
                  
    <div class="form-group">
      
         <label for="Telefono" class="control-label">Tel / Cel</label>
      
          <input type="text" name="telefono" class="form-control text-capitalize" id="telefono" required  
           onkeypress="return isNumber(event)">
      
       </div>
   
    </div>
            
           



<div class="col-md-5">

      <div class="form-group">

       <label for="CboMedico" class="control-label">Médico</label>
            

          <select class="form-control text-capitalize" name="CboMedico" id="CboMedico"  onkeypress="return handleEnter(this, event)" required>
              <option value="" selected="selected" style='color: #cccccc'>Seleccionar médico</option>

              <?php

                  define ('DB_USER', "root");
                  define ('DB_PASSWORD', "140469");
                  define ('DB_DATABASE', "veterinaria");
                  define ('DB_HOST', "localhost");

                  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
                  mysqli_set_charset( $mysqli, 'utf8');

                            $query = $mysqli -> query ("SELECT id_veterinario, nombre FROM veterinario");

                            while ($row = mysqli_fetch_array($query)) {

                              echo '<option value="'.$row[id].' '.$row[nombre].'">'.$row[nombre].'</option>';

                     }
                   ?>

          </select>

      </div>
  </div>
 

      


<div class="col-md-4">

                  
   <div class="form-group">
       
         <label for="Servicio" class="control-label">Servicio</label>
      
          <select class="form-control text-capitalize" name="title" id="title"   onkeypress="return handleEnter(this, event)" 
                   required="required" autocomplete="off" >
 
                <option value="" selected="selected">Seleccionar servicio</option> 
                <option value="consulta médica"  data-typdv="0C6FA4" >Consulta médica</option>
                <option value="Procedimiento"    data-typdv="#0CA46A" >Procedimiento</option> 
                <option value="Control médico"   data-typdv="#840CA4" >Control médico</option>
                <option value="Cirugía"          data-typdv="#D51051"  >Cirugía</option>
                <option value="Todo el dia"      data-typdv="#FF8C00" >Todo el día</option> 
  
        </select>
                     
      </div>        
   </div>
</div>


<div class="row" >

<div class="col-md-5">

            
        <div class="form-group">
         
          <label for="color" class="control-label">Color</label>
         
            <select name="color"  id="color" class="form-control text-capitalize"   required autocomplete="off">
            
              <option value="">Seleccione el color</option>
           
                 <option style="color:#0C6FA4;" value="0C6FA4"   "Consulta médica">&#9724; Azul - Consulta médica</option>
              
                 <option style="color:#0CA46A;" value="#0CA46A"  "procedimiento" >&#9724; Verde - Procedimiento</option>            

                 <option style="color:#840CA4;" value="#840CA4"  "control medico" >&#9724; Magenta - Control médico</option>              
              
                 <option style="color: #D51051;" value="#D51051" "cirugía" >&#9724; Rojo- Cirugía</option>
         
                 <option style="color:#FF8C00;" value="#FF8C00"   "todo el día" >&#9724; Orange - Todo el día </option>
              
                   
                          
           </select>
         </div>
      </div>
 




<div class="col-md-2">

 <div class="form-group"> 
 
 <label for="color" class="control-label">Col</label>
          
            <input type="color" name="color"  id="color" value="#ff0000" class="form-control text-capitalize"   required autocomplete="off">
                        
     </div>                       
 </div>



<div class="col-md-5">

   <div class="form-group">
        
         <label for="descripcion" class="control-label">Comentario</label>
     
         <input type="text" name="descripcion" class="form-control" id="descripcion" autocomplete="off"  >
       </div>
   </div>
                 
</div>



<div class="row">                        
  
   <div class="col-md-3">

      <div class="form-group">
      
         <label for="hora_ini" class="control-label">Hora ini</label>
     
         <input type="text" name="hora_ini" class="form-control" id="hora_ini" readonly >
       </div>
    </div>
  


                       
     
   <div class="col-md-3">                
                       
      <div class="form-group">
    
         <label for="hora_fin" class="control-label">Hora fin</label>
    
          <input type="text" name="hora_fin" class="form-control" id="hora_fin" readonly >
 
      </div>
    </div>
                
      
   
                       
     
   <div class="col-md-3">         

       <div class="form-group">

          <label for="fecha_actual" class=" control-label">Hoy</label>
         
          <input type="text_actual" <?php $fecha_actual= date("d-M-Y")?> value="<?php echo $fecha_actual?>" name="fecha" class="form-control" id="fecha_actual" readonly>

       </div>
    </div>

  </div>  
 
                  
                  
      <!--    <div class="form-group">
          <label for="start" class="col-sm-2 control-label">Fecha inicial</label>
    
        -->
              <div class="col-sm-10">
            <input type="hidden" name="start" class="form-control" id="start" readonly>
          </div>
          
  
    
   <!-- 
            <div class="form-group">
          <label for="end" class="col-sm-2 control-label">Fecha final</label>
  
    -->
            <div class="col-sm-10">
            <input type="hidden" name="end" class="form-control" id="end" readonly>
          </div>
          </div>
        
     <!--     
              
         <div id="enlace_listado">  
                            
              <p><a href="crearClientes.php"><i class="fa fa-user fa-2x"></i>&nbsp; Crear cliente nuevo</a>   </p> 
                            
         </div>
    
     -->          
              
        <div class="modal-footer">
        <button type="button" id="salir" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" id="agregar" name="agregar"  class="btn btn-primary">Guardar</button>
        </div>
     
      </div>
      </div>
    </div>
    
</form>
</div>

</div>



 <!--=====================================

MODAL AGREGAR CLIENTE

======================================-->

                       

  <div id="modalAgregarCliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">
                     

                <div class="modal-dialog">
                 
                    <div class="modal-content">

                           <form method="POST" id="user_form" role="form">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><span class="fa fa-user"></span> Agregar Usuario</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-lg-12">
                                <div id="info1"></div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Cédula">Cédula</label>
                                    <input name="TxtCedula" id="TxtCedula" type="text" onkeyup="format(this)" class="form-control text-capitalize"  autofocus onkeypress="return handleEnter(this, event)" required autocomplete="off">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nombre">Nombre</label>
                                    <input name="TxtNombre" id="TxtNombre" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input name="TxtTelefono" id="TxtTelefono" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Celular">Celular</label>
                                    <input name="TxtCelular" id="TxtCelular" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input name="TxtDireccion" id="TxtDireccion" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Barrio">Barrio</label>
                                    <input name="TxtBarrio" id="TxtBarrio" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input name="TxtEmail" id="TxtEmail" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <!--

                         <div class="col-md-3">
                                    <div class="form-group">
                                          <div class="estado_cliente"> <strong> Estado</strong></div>   
                                          <div>   </div>                                    
                                        <input type="checkbox" name="estado_cliente" id="estado_cliente" checked data-toggle="toggle" data-width="100" data-size="normal" data-on="Activo" data-off="Inactivo"   data-onstyle="success"   tabindex="8">

                                         <input type="hidden" name="hidden_estado" id="hidden_estado" value="Activo" />

                                    </div>
                          </div>          
                         
                          -->

                            <div class="col-md-3">
                                    <div class="form-group">
                                     <label for="Estado_cliente">Estado</label>

                                     <select  required  name="CboEstado" id="CboEstado"  class="form-control"   /> 
                                          <option value=""></option>
                                          <option value="Activo">Activo</option>
                                          <option value="Inactivo">Inactivo</option>
                                    </select>

                                   </div>
                          </div>

                        

                            <div class="row">
                                <div class="col-lg-12">

                                    <p><font style=" font-size:18px" color="#003399">Datos de la mascota</font></p>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Nombre_mascota">Nombre mascota </label>
                                            <input name="TxtNombre_mascota" id="TxtNombre_mascota" type="text" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autofocus autocomplete="off" value="<?php echo  @$direccion ?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Especie">Especie</label>
                                            <input name="TxtEspecie" id="TxtEspecie" type="tel"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Color">Color</label>
                                            <input name="TxtColor" id="TxtColor" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off">

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="CboSexo">Sexo</label>

                                            <select required name="CboSexo" id="CboSexo" class="form-control" />
                                            <option value=""></option>
                                            <option value="Macho">Macho</option>
                                            <option value="Hembra">Hembra</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Raza">Raza</label>
                                            <input name="TxtRaza" id="TxtRaza" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off">

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Peso">Peso</label>
                                            <input name="TxtPeso" id="TxtPeso" class="form-control" onkeypress="return handleEnter(this, event)" required autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Edad">Edad</label>
                                            <input name="TxtEdad" id="TxtEdad" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" required autocomplete="off">

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <br>

                            <br>

                            <div class="modal-footer">
                              
                                <input type="submit" name="BtnGuardar_cliente" id="BtnGuardar_cliente" class="btn btn-primary" value="Guardar" />
                                <button type="button" id="cerrar_modal" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
                            </div>
                        </div>
                           
                 </form>



                <?php

/*
                      $crearCliente = new ControladorClientes();
                      $crearCliente -> ctrCrearCliente();

*/
                ?>


             </div>
         </div>
 
    </div>

 



 






<!-- =================================================

Función que permite convertit la tecla enter en Tab 

================================================== -->

<script type="text/javascript">            
function handleEnter (field, event) {
  var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
  if (keyCode == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
      if (field == field.form.elements[i])
        break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
  } 
  else
  return true;
}      
</script>




<script type="text/javascript">
 
 var firstEmptySelect = true;

function formatSelect(result) {
    if (!result.id) {
        if (firstEmptySelect) {
            console.log('showing row');
            firstEmptySelect = false;
            return '<div class="row">' +
                    '<div class="col-xs-3"><b>Client</b></div>' +
                    '<div class="col-xs-3"><b>Account</b></div>' +
                    '<div class="col-xs-3"><b>Deal</b></div>' +
                    '</div>';
        } else {
            console.log('skipping row');
            return false;
        }
        console.log('result');
        console.log(result);
    }
    return '<div class="row">' +
                 '<div class="col-xs-3">' + result.client_name + '</div>' +
                 '<div class="col-xs-3">' + result.account_name + '</div>' +
                 '<div class="col-xs-3">' + result.deal_name + '</div>' +
                 '</div>';      
}

function matcher(query, option) {
    firstEmptySelect = true;
    if (!query.term) {
        return option;
    }
    var has = true;
    var words = query.term.toUpperCase().split(" ");
    for (var i =0; i < words.length; i++){
        var word = words[i];
        has = has && (option.text.toUpperCase().indexOf(word) >= 0); 
    }
    if (has) return option;
    return false;
}


</script>




 <!-- =========================================

INSERTAR CLIENTE NUEVO

==============================================  -->



              <script type="text/javascript">
                  $(document).ready(function() {
                     
                      $('#user_form').on('submit', function(event) {
                          event.preventDefault();

                          $.ajax({
                              url: "../modelos/insertar_clientes.php",
                              method: "POST",
                              data: $(this).serialize(),
                              dataType: "json",
                              success: function(data) {

                                  //  $('#BtnGuardar_cliente').attr('disabled', true);
                                    $('#user_form')[0].reset();
                                    $('#modalAgregarCliente').modal('hide');
                                    toastr["success"]("los datos se han guardado correctamente", "Información");
                  

                              }

                          });

                      });

                   });    
            
              </script>


 



<!-- ===========================================

VALIDAR FORMULARIO

================================================ -->


<script type="text/javascript">
    
function validaForm(){
    // Campos de texto
    if($("#buscar_clientes").val() == ""){
         toastr["error"]("EL campo buscar cliente es requerido.", "Información");
        $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }
    if($("#CboMedico").val() == ""){
         toastr["error"]("EL campo responsable es requerido.", "Información");
        $("#apellidos").focus();
        return false;
    }
   
     return true; // Si todo está correcto

 }

   

</script>



 

 <!-- ====================================

DESABILITAR BOTÖN AGREGAR

=========================================-->

                    <script type="text/javascript">
                         $("#agregar").prop('disabled',true); // disable
                         $('#agregar').prop("required", true);
                    </script>



<!-- =======================================================

DATATABLE LISTA DE PACIENTES HOSPITALIZADOS

=========================================================  -->


<script type="text/javascript">
  
$(document).ready(function () {
        $('#table_data2').DataTable({
            "searching": false,
            "paging": false,
            "ordering": false,
            "info": false,


             "language": {
                      "thousands": ",",
                      "sProcessing": "Procesando...",
                      "sLengthMenu": "Mostrar _MENU_ registros",
                      "sZeroRecords": "No se encontraron resultados",
                      "sEmptyTable": "Ningún dato disponible en esta tabla",
                      "sInfo": " _START_ al _END_ de un total de _TOTAL_ registros",
                      "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                      "sInfoPostFix": "",
                      "sSearch": "Buscar:",
                      "sUrl": "",
                      "sInfoThousands": ",",
                      "sLoadingRecords": "Cargando...",
                      "oPaginate": {
                          "sFirst": "Primero",
                          "sLast": "Último",
                          "sNext": "Siguiente",
                          "sPrevious": "Anterior"

                      },
                      "oAria": {
                          "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                      }

                  }
      
         });
    });


</script>






<!-- ===================================================

GUARDAR DATOS Y CARGAR DATATABLE JQUERY LISTA DE ESPERA

======================================================= --->


                    <script type="text/javascript">
                       $(document).ready(function() {

                            var perfil = $('.TxtPerfil').val();

                            var table = $('#table_data').DataTable({

                                "pageLength": 5,
                                "processing": true,
                                "ordering": false,


                                "ajax": "../modelos/cargar_tabla_clientes.php" ,
                                "type": "POST",
                                "dataSrc": "",

                            
                                columns: [{


                                        data: 'id'

                                    
                                        
                                    }, {

                                        data: 'Id_cliente', "visible" : false
                                    }, {
                                        data: 'nombre'
                                    }, {
                                        data: 'nombre_mascota'
                                    }, {
                                        data: 'hora'
                                    }, {
                                        data: 'medico'
                                    },

                          
                                    {
                                                     
                                                   
                                    
                                "data": "Id_cliente",
                                "defaultContent": '<button class="btn btn-primary DeleteBtn">consulta</button>'
                                                                                                        


                                   }

                               ],


                             columnDefs: [ {

                             targets: -1,
                                   
                                      "searchable": false,
                                       render: function ( data, type, row) {
                                       
                                      
                                      //  var perfil = $('.TxtPerfil').val();

                                                                          

                                         return '<a href="gestion_medica.php?Id_cliente=' + data +'"  class="fa fa-stethoscope" title="Atender" style="text-decoration: none;"></a>' +' '+ '<a href"#" class="fa fa-trash eliminar" Id_cliente="' + data +'" title="Eliminar" style="text-decoration: none;"> </a>';          
                                                                       
                                   
                                  
                                 
                                 }



                               }],

                         


                                "language": {
                                    "thousands": ",",
                                    "sProcessing": "Procesando...",
                                    "sLengthMenu": "Mostrar _MENU_ registros",
                                    "sZeroRecords": "No se encontraron resultados",
                                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                                    "sInfo": " _START_ al _END_ de un total de _TOTAL_ registros",
                                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                                    "sInfoPostFix": "",
                                    "sSearch": "Buscar:",
                                    "sUrl": "",
                                    "sInfoThousands": ",",
                                    "sLoadingRecords": "Cargando...",
                                    "oPaginate": {
                                        "sFirst": "Primero",
                                        "sLast": "Último",
                                        "sNext": "Siguiente",
                                        "sPrevious": "Anterior"

                                    },
                                    "oAria": {
                                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                    }

                                }

                            
                            });

                            table.on('order.dt search.dt', function() {
                                table.column(0, {
                                    search: 'applied',
                                    order: 'applied'
                                }).nodes().each(function(cell, i) {
                                    cell.innerHTML = i + 1;
                                });

                            });

                            $('#form_clientes').on('submit', function(event) {
                               
                                $('#agregar').attr('disabled', true);

                                 event.preventDefault();

                                $.ajax({
                                    url: "modelos/insertar_datos_tabla.php",
                                    method: "POST",
                                    data: $(this).serialize(),
                                    dataType: "json",
                                    success: function(data) {

                                        $('#agregar').prop("required", true);
                                        $('#CboMedico').val("");  
                                        $('#buscar_clientes').empty();
                                        $('#form_clientes')[0].reset();

                                        table.ajax.reload();

                                    }

                                });

                            });
                          
                        });



/* ====================================

ELIMINAR RIGISTRO DE LISTA DE ESPERA

=======================================  */
              

         $(document).on('click', '.eliminar', function(e){
            
            var Id_cliente = $(this).attr("Id_cliente");
            SwalDelete(Id_cliente);
    
            
          });

        
        function SwalDelete(Id_cliente){
        

          swal({
            title: 'Está seguro?',
            text: "Esta acción eliminará el registro!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!',
            showLoaderOnConfirm: true,
              
            preConfirm: function() {
              return new Promise(function(resolve) {
               
                 $.ajax({
                   url:"modelos/eliminar_lista_espera.php",
                   method:"POST",
                   data:{Id_cliente:Id_cliente},
                   dataType: 'json'
                 })
                  
                 .done(function(response){

                

                  swal('Eliminado!', response.message, response.status);

                   
                   // table.destroy();
                 
                    $('#table_data').DataTable().ajax.reload();

                  // table.ajax.reload();    
               

                   
                 })

                 .fail(function(){
                  swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });


              },

            allowOutsideClick: false        
          }); 
         
        }


 </script>




<!-- ========================================

MOSTRAR HORA ACTUALIZADA

============================================ -->

            <script type="text/javascript">
                function mueveReloj() {
                    momentoActual = new Date()
                    hora = momentoActual.getHours()
                    minuto = momentoActual.getMinutes()
                    segundo = momentoActual.getSeconds()

                    str_segundo = new String(segundo)
                    if (str_segundo.length == 1)
                        segundo = "0" + segundo

                    str_minuto = new String(minuto)
                    if (str_minuto.length == 1)
                        minuto = "0" + minuto

                    str_hora = new String(hora)
                    if (str_hora.length == 1)
                        hora = "0" + hora

                    horaImprimible = hora + " : " + minuto + " : " + segundo

                    document.form_clientes.reloj.value = horaImprimible

                    setTimeout("mueveReloj()", 1000)
                }
            </script>



<!-- ========================================

PASAR VALOR DE COMBOBOX A INPUT TEXT

============================================ -->

            <script language="javascript">
                $(document).ready(function() {
                    $("#CboMedico").change(function() {

                        var value1 = $(this).val().replace(/\d+/g, '');

                        var value2 = $(this).val().replace(/[^\d\,]/g, '');

                       
                        $("#medico").val(value1);
                        $("#id_registro").val(value2);
                       // $('#agregar').removeClass('disabled');

                    /*
                        if ($(this).val() == '') {
                            $('#agregar').prop('disabled', true);
                            return false;
                        }
                        else {
                            $('#agregar').prop('disabled', false);
                        }
                    */

                    });
                });


            </script>






<!-- ========================================

PASAR VALOR DE COMBOBOX A INPUT TEXT

============================================ -->

              <script language="javascript">
                  $(document).ready(function() {
                      $("#CboMedico").change(function() {

                          var value1 = $(this).val().replace(/\d+/g, '');

                          var value2 = $(this).val().replace(/[^\d\,]/g, '');

                         
                          $("#medico").val(value1);
                          $("#id_registro").val(value2);
                         // $('#agregar').removeClass('disabled');

                      /*
                          if ($(this).val() == '') {
                              $('#agregar').prop('disabled', true);
                              return false;
                          }
                          else {
                              $('#agregar').prop('disabled', false);
                          }
                      */

                      });
                  });
              </script>






<!-- ========================================

CONFIGURACIÖN DE SELECT2

============================================ -->

              <script type="text/javascript">
                  $(document).ready(function() {
                      $("#mostrar_inputs").css('display', 'none');
                                                 

                      $('#buscar_clientes').select2({

                          language: {

                              noResults: function() {

                                  return "No hay resultado";
                              },
                              searching: function() {

                                  return "Buscando..";
                              }
                          },


                          placeholder: 'Escriba la cédula o el nombre del cliente',
                          minimumInputLength: 1,
                          allowClear: true,
                          theme: 'bootstrap',
                          ajax: {
                              url: '../modelos/buscar_cliente.php',
                              contentType: "application/json; charset=utf-8",
                              dataType: 'json',
                              delay: 250,


                              processResults: function(data) {
                                  return {
                                      results: data

                                  };
                              },
                              cache: true
                          }
                      });
                  });
              </script>






<!-- ========================================

CONFIGURACIÖN DE SELECT2 BUSCAR

============================================ -->

              <script type="text/javascript">
                  $(document).ready(function() {
                    
                                                 

                      $('#buscar').select2({

                          language: {

                              noResults: function() {

                                  return "No hay resultado";
                              },
                              searching: function() {

                                  return "Buscando..";
                              }
                          },


                          placeholder: 'Buscar por cédula o por nombre del cliente',
                          minimumInputLength: 1,
                          allowClear: true,
                          theme: 'bootstrap',
                          ajax: {
                              url: '../modelo/buscar_cliente.php',
                              contentType: "application/json; charset=utf-8",
                              dataType: 'json',
                              delay: 250,


                              processResults: function(data) {
                                  return {
                                      results: data

                                  };
                              },
                              cache: true
                          }
                      });
                  });
              </script>










 <!-- ========================================

BUSCAR CLIENTES POR MEDIO DE EVENTO CHANGE 

============================================ -->

            <script type="text/javascript">
                $(document).ready(function() {

                    $('#buscar_clientes').change(function() {
                    $(".mostrar_inputs").css('display', 'none');

                     
                         $("#agregar").prop('disabled',false); // disable
                         $('#agregar').prop("required", true);
                        


                        $.ajax({
                            type: "POST",
                            data: "Id_cliente=" + $('#buscar_clientes').val(),
                            url: "../modelos/buscar_cliente_2.php",
                            success: function(r) {
                                dato = jQuery.parseJSON(r);

                              
                                $('#Id_cliente').val(dato['Id_cliente']);
                                $('#cedula').val(dato['cedula']);
                                $('#nombre_cliente').val(dato['nombre']);
                                $('#nombre_mascota').val(dato['nombre_mascota']);
                                $('#telefono').val(dato['telefono']);
                                $('#celular').val(dato['celular']);

                                $("#agregar").prop('disabled',false); // enable
                                $('#agregar').prop("required", true);



                                

                                // console.log(dato);
                                // $('#imgProducto').prepend('<img class="img-thumbnail" id="imgp" src="' + dato['ruta'] + '" />');
                            }

                        });
                    });
                });
            </script>





<!-- ======================================================================== -->







<!-- ========================================

CONFIGURACIÖN DE SELECT2

============================================ -->

              <script type="text/javascript">
                  $(document).ready(function() {
                      $("#mostrar_inputs").css('display', 'none');
                                                 

                      $('#buscar_2').select2({

                          language: {

                              noResults: function() {

                                  return "No hay resultado";
                              },
                              searching: function() {

                                  return "Buscando..";
                              }
                          },


                          placeholder: 'Escriba la cédula o el nombre del cliente',
                          minimumInputLength: 1,
                          allowClear: true,
                          theme: 'bootstrap',
                          ajax: {
                              url: '../modelos/buscar_cliente.php',
                              contentType: "application/json; charset=utf-8",
                              dataType: 'json',
                              delay: 250,


                              processResults: function(data) {
                                  return {
                                      results: data

                                  };
                              },
                              cache: true
                          }
                      });
                  });
              </script>






<!-- ========================================

CONFIGURACIÖN DE SELECT2 BUSCAR  buscar_clientes_2

============================================ -->

              <script type="text/javascript">
                  $(document).ready(function() {
                    
                                                 

                      $('#buscar_cliente_2').select2({

                          language: {

                              noResults: function() {

                                  return "No hay resultado";
                              },
                              searching: function() {

                                  return "Buscando..";
                              }
                          },


                          placeholder: 'Buscar por cédula o por nombre del cliente',
                          minimumInputLength: 1,
                          allowClear: true,
                          theme: 'bootstrap',
                          ajax: {
                              url: '../modelo/buscar_cliente.php',
                              contentType: "application/json; charset=utf-8",
                              dataType: 'json',
                              delay: 250,


                              processResults: function(data) {
                                  return {
                                      results: data

                                  };
                              },
                              cache: true
                          }
                      });
                  });
              </script>










<!-- ==========================================

BUSCAR CLIENTES (buscar_cliente_2) POR MEDIO DEL EVENTO CNAHGE

=============================================== -->





                            <script type="text/javascript">
                                $(document).ready(function() {


                                   

                                    $('#buscar_clientes_2').change(function() {
                                    $(".mostrar_inputs").css('display', 'none');

                                     // var Id_cliente =  $('#Id_cliente').val(6);  

                                    //  let data = $(this).select2('data')[0];

                                         $("#agregar").prop('disabled',false); // disable
                                         $('#agregar').prop("required", true);
                                        
                                         

                                        $.ajax({
                                            type: "POST",
                                            data: "Id_cliente=" + $('#buscar_2').val(),
                                            url: "../modelo/buscar_cliente_2.php",
                                            success: function(r) {
                                                dato = jQuery.parseJSON(r);

                                              
                                                $('#Id_cliente').val(dato['Id_cliente']);
                                                $('#cedula').val(dato['cedula']);
                                                $('#nombre_cliente').val(dato['nombre']);
                                                $('#nombre_mascota').val(dato['nombre_mascota']);
                                                $('#telefono').val(dato['telefono']);
                                                $('#celular').val(dato['celular']);

                                                $("#agregar").prop('disabled',false); // enable
                                                $('#agregar').prop("required", true);

                                            

                                                  window.location.href = 'gestion_medica.php?Id_cliente=' + dato['Id_cliente'];              
                                      

                                                // console.log(dato);
                                                // $('#imgProducto').prepend('<img class="img-thumbnail" id="imgp" src="' + dato['ruta'] + '" />');
                                            }

                                        });
                                    });
                                });
                            </script>












 <!-- =========================================================

BUSCAR CLIENTES (buscar_clientes_2) POR MEDIO DE EVENTO CHANGE 

============================================================== -->

                            <script type="text/javascript">
                                $(document).ready(function() {


                                   

                                    $('#buscar_clientes_2').change(function() {
                                    $(".mostrar_inputs").css('display', 'none');

                                     // var Id_cliente =  $('#Id_cliente').val(6);  

                                    //  let data = $(this).select2('data')[0];

                                         $("#agregar").prop('disabled',false); // disable
                                         $('#agregar').prop("required", true);
                                        
                                         

                                        $.ajax({
                                            type: "POST",
                                            data: "Id_cliente=" + $('#buscar_clientes_2').val(),
                                            url: "../modelo/buscar_cliente_2.php",
                                            success: function(r) {
                                                dato = jQuery.parseJSON(r);

                                              
                                                $('#Id_cliente').val(dato['Id_cliente']);
                                                $('#cedula').val(dato['cedula']);
                                                $('#nombre_cliente').val(dato['nombre']);
                                                $('#nombre_mascota').val(dato['nombre_mascota']);
                                                $('#telefono').val(dato['telefono']);
                                                $('#celular').val(dato['celular']);

                                                $("#agregar").prop('disabled',false); // enable
                                                $('#agregar').prop("required", true);

                                            

                                                  window.location.href = 'gestion_medica.php?Id_cliente=' + dato['Id_cliente'];              
                                      

                                                // console.log(dato);
                                                // $('#imgProducto').prepend('<img class="img-thumbnail" id="imgp" src="' + dato['ruta'] + '" />');
                                            }

                                        });
                                    });
                                });
                            </script>







<!-- ============================================  -->

<!--Validar Entrada de Registro a la BD.  -->

<!-- ============================================  -->

                  <script type="text/javascript">
                      $(document).ready(function() {
                          $("#TxtCedula").keyup(function(e) {
                              //removes spaces from username
                              $(this).val($(this).val().replace(/\s/g, ''));
                              var username = $(this).val();
                              if (username.length < 10) {
                                  $("#info1").html('');
                                  return;
                              }
                              if (username.length >= 4) {
                                  $("#info1").html('<img src="../vistas/img/varios/ajax-loader.gif" />');

                                  $.post('../modelos/validar_cliente.php', {
                                      'TxtCedula': username
                                  }, function(data) {
                                      $("#info1").html(data);

                                  });
                              }
                          });
                      });
                  </script>

                  </script>

                  <!--  Función que permite agregar puntos de mil -->

                  <script language="javascript">
                      function format(input) {
                          var num = input.value.replace(/\./g, '');
                          if (!isNaN(num)) {
                              num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
                              num = num.split('').reverse().join('').replace(/^[\.]/, '');
                              input.value = num;
                          } else {
                              alert('Solo se permiten numeros');
                              input.value = input.value.replace(/[^\d\.]*/g, '');
                          }
                      }
                  </script>

 <!-- ======================================

VACIAR CONTENIDO DE FORMULARIO VENTANA MODAL
===========================================   -->

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#cerrar_modal').click(function() {
                            $('#info1').empty();
                            $('#user_form')[0].reset();

                        });

                    });
                </script>

 <!-- =====================================

CREAR CONSECUTIVO EN TABLA HTML
=========================================  -->

 <!--

<script type="text/javascript">
var addSerialNumber = function () {
    $('table tr').each(function(index) {
        $(this).find('td:nth-child(1)').html(index+(-1));
    });
};

addSerialNumber();

</script>

-->

<!-- ==============================

PERMITIR SÖLO NÚMEROS EN INPUT TEXT  
================================== -->

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#TxtTelefono").inputFilter(function(value) {
                                return /^\d*$/.test(value); // Allow digits only, using a RegExp
                            });
                        });
                    </script>

<!-- ==============================

PERMITIR SÖLO NÚMEROS EN INPUT TEXT  
================================== -->

                <script type="text/javascript">
                    $(document).ready(function() {

                        $("#TxtTelefono").keypress(function(e) {
                            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                //display error message
                                $("#errmsg").html("Escriba sólo números").show().fadeOut("slow");
                                return false;
                            }
                        });
                    });
                </script>

<!-- ==============================

PERMITIR SÖLO NÚMEROS EN INPUT TEXT  
================================== -->

            <script type="text/javascript">
                $(document).ready(function() {

                    $("#TxtCelular").keypress(function(e) {
                        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                            //display error message
                            $("#errmsg").html("Sólo números").show().fadeOut("slow");
                            return false;
                        }
                    });
                });

            </script>



<!-- ===================================== 

CAMBIAR PRIMERA LETRA A MAYUSCULA

========================================== -->

               
          <script type="text/javascript">
              
            function capitalize(str) {
              strVal = '';
              str = str.split(' ');
              for (var chr = 0; chr < str.length; chr++) {
                strVal += str[chr].substring(0, 1).toUpperCase() + str[chr].substring(1, str[chr].length) + ' '
              }
              return strVal
            }

         </script>





<!-- ==================================

VALIDAR CORREO ELECTRONICO EN INPUT TEXT
======================================= -->

                      <script type="text/javascript">
                          $("#TxtEmail").on("blur", function(event) {
                              var str = $(this).val();
                              var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                              console.log(str);
                              if (!filter.test(str)) {
                                  toastr.error('Escriba un correo válido.');
                                  return false;
                              }
                          });
                      </script>




<!-- ==============================

PERMITIR SÖLO NÚMEROS EN INPUT TEXT  
================================== -->

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#TxtTelefono").inputFilter(function(value) {
                                return /^\d*$/.test(value); // Allow digits only, using a RegExp
                            });
                        });
                    </script>

<!-- ==============================

PERMITIR SÖLO NÚMEROS EN INPUT TEXT  
================================== -->

                <script type="text/javascript">
                    $(document).ready(function() {

                        $("#TxtTelefono").keypress(function(e) {
                            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                //display error message
                                $("#errmsg").html("Escriba sólo números").show().fadeOut("slow");
                                return false;
                            }
                        });
                    });
                </script>

<!-- ==============================

PERMITIR SÖLO NÚMEROS EN INPUT TEXT  
================================== -->

              <script type="text/javascript">
                  $(document).ready(function() {

                      $("#TxtCelular").keypress(function(e) {
                          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                              //display error message
                              $("#errmsg").html("Sólo números").show().fadeOut("slow");
                              return false;
                          }
                      });
                  });

              </script>



<!-- ===================================== 

CAMBIAR PRIMERA LETRA A MAYUSCULA

========================================== -->

               
          <script type="text/javascript">
              
            function capitalize(str) {
              strVal = '';
              str = str.split(' ');
              for (var chr = 0; chr < str.length; chr++) {
                strVal += str[chr].substring(0, 1).toUpperCase() + str[chr].substring(1, str[chr].length) + ' '
              }
              return strVal
            }

         </script>




<!-- ==================================

VALIDAR CORREO ELECTRONICO EN INPUT TEXT
======================================= -->

          <script type="text/javascript">
              $("#TxtEmail").on("blur", function(event) {
                  var str = $(this).val();
                  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                  console.log(str);
                  if (!filter.test(str)) {
                      toastr.error('Escriba un correo válido.');
                      return false;
                  }
              });
          </script>








 <!-- =========================================

INSERTAR DATOS A FULLCALENDAR

==============================================  -->

<!--


        <script type="text/javascript">
            $(document).ready(function() {
               
                $('#Insertar_fullcalendar').on('submit', function(event) {
                    event.preventDefault();

                    $.ajax({
                        url: "vistas/plugins/calendar/addEvent.php",
                        method: "POST",
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(data) {

                              $('#agregar').attr('disabled', true);
                              $('#Insertar_fullcalendar')[0].reset();
                              $('#ModalAdd').modal('hide');
                              //$('#agenda_modal').modal('hide');
                          
                            
                               $('#calendar').fullCalendar('refetchEvents');


                           
                              toastr["success"]("los datos se han guardado correctamente", "Información");

                                                        
                             

                              //document.location.reload(); 
            

                        }

                    });

                });

             });    
        </script>


-->




 <!-- =========================================

EDITAR DATOS DE FULLCALENDAR

==============================================  -->

<!--

        <script type="text/javascript">
            $(document).ready(function() {
               
                $('#editar_calendario').on('submit', function(event) {
                    event.preventDefault();

                    $.ajax({
                        url: "vistas/plugins/calendar/editEventTitle.php",
                        method: "POST",
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(data) {

                              $('#calendar').fullCalendar('refetchEvents');
                              $('#fullCalModal').fullCalendar('refetchEvents');

                             // $('#agregar').attr('disabled', true);
                              $('#editar_calendario')[0].reset();
                              $('#ModalEdit').modal('hide');
                              $('#agenda_modal').modal('hide');
                              toastr["success"]("los datos se han guardado correctamente", "Información");

                           
                            

                            // $("#fullCalModal").fullCalendar('addEventSource', JSON, true); 

                             




                             // document.location.reload(); 
            

                        }

                    });

                });

             });    
        </script>

-->



 <!-- =====================================

MOSTRAR NUEVO EVENTO INSERTADO EN FULLCALENDAR LIST

=========================================  -->




<script type="text/javascript">
 
 $(document).ready(function() { 

 $('#agenda_modal').on('shown.bs.modal', function (e) {

       
        $('#fullCalModal').fullCalendar('render');
        $('#fullCalModal').fullCalendar('refetchEvents');

    });

});

</script>





 <!-- =====================================

FULLCALENDAR LIST

=========================================  -->

           
<script type="text/javascript">

 $(function() {
      
        var calendar1 = $('#calendar').fullCalendar({


                     
                       
           loading: function( isLoading, view ) {
                    if (isLoading) {
                        $('#loading').show();
                    }
                    else {                
                        $('#loading').hide();
                    }
                },
           

           defaultView: 'list',
         

           header:{                   
                 
                    left: ''
                  },


        
          views: {
            list: {
              visibleRange: function(currentDate) {
                return {
                  start: currentDate.clone().add(-1, 'days'),
                  end: currentDate.clone().add(-6, 'days') // exclusive end, so 3
                };
              }
            }
          },

            
              locale: 'es',
              timezone:'local',
              listDayAltFormat: 'dddd',
              selectable:     true,
             
             

       events: 'modelos/eventos_calendario.php?view=1',
                    
            

    
      eventClick: function(event) {

          $('#ModalEdit #id').val(event.id);
          $('#ModalEdit #fecha').val(event.fecha);
          $('#ModalEdit #cliente').val(event.cliente);
          $('#ModalEdit #mascota').val(event.mascota);
          $('#ModalEdit #especie').val(event.especie);
          $('#ModalEdit #telefono').val(event.telefono);
          $('#ModalEdit #CboMedico').val(event.medico);
          $('#ModalEdit #descripcion').val(event.descripcion);
          $('#ModalEdit #title').val(event.title);
          $('#ModalEdit #title').val(event.title);
          $('#ModalEdit #hora_ini').val(event.hora_ini);
          $('#ModalEdit #hora_fin').val(event.hora_fin);
          $('#ModalEdit #start').val(event.start);
          $('#ModalEdit #end').val(event.end);
          $('#ModalEdit #color').val(event.color);
         
          $('#ModalEdit').modal('show');
     
     
        

           $('#editar_calendario').off('submit').on('submit', function(e) {


           

              //Obtenemos datos formulario.
              var data = $(this).serialize(); 
              

              //AJAX.
              $.ajax({  
                 type : 'POST',
                 url: "vistas/plugins/calendar/editEventTitle.php",
                 data:  data, 

                 success:function(data) {  
                   
                          $('#agregar').attr('disabled', true);
                            $('#editar_calendario')[0].reset();
                            $('#ModalEdit').modal('hide');
                            //$('#agenda_modal').modal('hide');


                            $('#calendar').fullCalendar('refetchEvents');

                            //  $('#fullCalModal').fullCalendar('render');
                            $('#fullCalModal').fullCalendar('refetchEvents');

                            toastr["success"]("los datos se han modificado correctamente", "Información");

                 }  
              });
              return false;

       
          e.preventDefault();  
        

          
     });

              
 },


    
 
     
                
              /*
              // filtrar eventos
                    if (mostrar_todo){
                        return true;
                    }else{
                        var filtro = false;
                        $.each($color_selector.val(), function(key,val){
                            if (event.title.includes(val)){
                                filtro = true;
                                return false;
                            }
                        });
                        return filtro
                    }
                }
            });


                 */

  



            eventRender: function eventRender(eventObj, $el) {
                      
             


                var request = new XMLHttpRequest();
                request.open('GET', '', true);
                request.onload = function () {
                $el.popover({
              
                  title: capitalize(eventObj.cliente),
           // content:  "Mascota:" + eventObj.mascota+" Espece:" + eventObj.especie,

              placement: 'top',
              trigger:   'hover',
              container: 'body',
              html:true,
               

                 content:  '<p>' + 'Mascota: ' + eventObj.mascota +  '<p>' + 'Especie: ' + eventObj.especie +  '<p>' + 'Teléfono: ' + 

                             eventObj.telefono + '<p>' + 'Asignado a: ' + eventObj.medico + '<p>' + 'Descripción: ' + eventObj.descripcion 
                               ,  

                 

                  });
                }

             

              request.send();
             },
            
 



         
   });         

         
 /*
    function edit(event){
      start = event.start.format('YYYY-MM-DD HH:mm');
      if(event.end){
        end = event.end.format('YYYY-MM-DD HH:mm');
      }else{
        end = start;
      }
      
      id =  event.id;
      
      Event = [];
      Event[0] = id;
      Event[1] = start;
      Event[2] = end;
      
      $.ajax({
       url: 'vistas/plugins/calendar/editEventTitle.php',
       type: "POST",
       data: {Event:Event},
       success: function(rep, e) {
       e.preventDefault();

     
         if(rep == 'OK'){
          
           $('#fullCalModal').fullCalendar('render');
           $('#fullCalModal').fullCalendar('refetchEvents');
       


           $('#ModalEdit').modal('hide');  


          }else{
            alert('No se puede guardar. Intente de nuevo.'); 
          }
        }
      });
    }
     
*/
                 
 });   

</script>





<script type="text/javascript">
  
toastr.options = {
    
    "positionClass": "toast-top-right",
    timeOut  : 1800, //default timeout,
};

</script>







<!-- ==============================================

VENTANA MODAL FULLCALENDAR

=================================================== -->


<script type="text/javascript">

 $(document).ready(function() {
   

    var calendar = $('#fullCalModal').fullCalendar({
      
       
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'agendaDay,agendaWeek,month'
        },


        timezone: 'local',

        axisFormat: 'h:a',
        defaultView: 'agendaDay',
        slotDuration: '00:30:00',
        minTime: '06:00:00',
        maxTime: '19:00:00',
        eventLimit: true, // allow "more" link when too many events
        selectable: true,
        selectHelper: true,
        allDaySlot: true,
        nowIndicator: true,


        events: "../modelos/mostrar_eventos_fullcalendar.php",


        eventRender: function(event, element, view) {


          
           
            if (event.allDay === 'true') {
           
                event.allDay = true;
           
            } else {
           
                event.allDay = false;
            }

        },







/* AGREGAR EVENTO A CALENDARIO */


   select: function(start, end) {
   

                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm'));
                $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm'));
                $('#ModalAdd #hora_ini').val(moment(start).format('hh:mm a'));
                $('#ModalAdd #hora_fin').val(moment(end).format('hh:mm a'));
                $('#ModalAdd').modal('show');



                $('#Insertar_fullcalendar').off('submit').on('submit', function(event) {

                    event.preventDefault();

                    $.ajax({
                        url: "vistas/plugins/calendar/addEvent.php",
                        method: "POST",
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(data) {

                            $('#agregar').attr('disabled', true);
                            $('#Insertar_fullcalendar')[0].reset();
                            $('#ModalAdd').modal('hide');
                            //$('#agenda_modal').modal('hide');


                            $('#calendar').fullCalendar('refetchEvents');

                            //  $('#fullCalModal').fullCalendar('render');
                            $('#fullCalModal').fullCalendar('refetchEvents');

                            toastr["success"]("los datos se han guardado correctamente", "Información");

                        }

                    });

                });


                calendar.fullCalendar('renderEvent',

                    {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    },

                  

                );
          
            calendar.fullCalendar('unselect');

        },

      editable: true,



/* ACTIAULIZAR DATOS DE FECHA Y HORA */


      eventDrop: function(event, delta) {
       
       var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
       var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
       
         $.ajax({
           url: '../modelos/update_events.php',
           data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
           type: "POST",
           success: function(json) {
            alert("Los datos se han actualizado.");

           $('#calendar').fullCalendar('refetchEvents');
           $('#fullCalModal').fullCalendar('refetchEvents');

           }
         });
       },




/* ELIMINAR EVENTOS DEL CALENDIARIO */

        eventClick: function(event) {

            var decision = confirm("Está seguro de eliminar esta cita?");

            if (decision) {

                $.ajax({
                    type: "POST",
                    url: "../modelos/delete_event.php",
                    data: "&id=" + event.id,
                    success: function(json) {
                        $('#calendar').fullCalendar('removeEvents', event.id);
                        $('#fullCalModal').fullCalendar('removeEvents', event.id);
                        // alert("Updated Successfully");
                        toastr["info"]("los datos se han eliminado correctamente", "Información");

                    }

                });
            }
        },




/* ACTIAULIZAR EVENTOS DE CALENDARIO */

        eventResize: function(event) {

            start = event.start.format('YYYY-MM-DD HH:mm');

            var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
            $.ajax({
                url: 'vistas/plugins/calendar/editEventDate.php',
                data: 'title=' + event.title + 'start=' + satart + '&hora_ini=' + hora_ini + '&hora_fin=' + hora_fin + '&id=' + event.id,
                type: "POST",
                success: function(json) {
                    alert("Updated Successfully");
                }
            });
        }

    });

});


  
</script>



   </div>
</div>


</body>

