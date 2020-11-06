<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
     Citas para hoy
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">citas para hoy</li>
    
    </ol>

  </section>
 <!-- Main content -->
    <section class="content">

      <!-- Default box -->
       <div class="box box-primary">
        <div class="box-header with-border">
        
        <div class="box-body">
         
        


    <!-- row -->
    <div class="row">

       <div class="col-lg-12">

       
         <br>

       <?php

       if($_SESSION["perfil"] =="Administrador" || $_SESSION["perfil"] == "Vendedor"){

          include "inicio/listado-citas.php";

       }

        
      
      ?>

    </div>




  </div>
      <!-- /.box -->
   
   </div>

  </div>

  </div>
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     



    
 
  


