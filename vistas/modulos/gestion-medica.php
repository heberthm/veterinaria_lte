<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Gestión médica
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Gestión médica</li>
    
    </ol>

  </section>
 <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> </h3>
           
            <button type="button" class="btn btn-primary"  onclick="window.location.href='' " style="text-align:left"><span class="fa fa-stethoscope fa-fw"  tabindex="3"></span> Control médico</button>  

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="" data-toggle="tooltip" title="Remove">
              <i class="fa fa-navicon"></i></button>
          </div>
        </div>
        <div class="box-body">
         
         <form name="GestionMedica" id="gestionMedica" method="POST" role="form" />
             <div class="row">
                   <div class="col-md-2">
                        <div class="form-group">
                             <label for="Cedula">Cédula</label>
                                <input type="text" name="TxtCedula" id="TxtCedula"  onkeyup="format(this)"    class="form-control " tabindex="1" autofocus  onkeypress="return handleEnter(this, event)" required  autocomplete="off" >
                            
                        </div>
                            
                   </div>

                   <div class="col-md-5">
                        <div class="form-group">
                             <label for="nombre">Nombre</label>
                                <input type="text" name="TxtNombre" id="TxtNombre" class="form-control text-capitalize" tabindex="2" onkeypress="return handleEnter(this, event)" required  autocomplete="off" >
                            
                        </div>
                            
                   </div> 
 

                   <div class="col-md-2">
                        <div class="form-group">
                             <label for="telefono">Teléfono</label>
                                <input type="text" name="TxtTelefono" id="TxtTelefono" class="form-control text-capitalize" tabindex="2"  onkeypress="return handleEnter(this, event)" required  autocomplete="off" >
                            
                        </div>
                            
                   </div> 


                   <div class="col-md-2">
                        <div class="form-group">
                             <label for="celular">Celular</label>
                                <input type="text" name="TxtCelular" id="TxtCelular" class="form-control text-capitalize" tabindex="3"  onkeypress="return handleEnter(this, event)" required  autocomplete="off" >
                            
                        </div>
                            
                   </div> 

            </div>

          
           <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                             <label for="direccion">Dirección</label>
                                <input type="text" name="TxtDireccion" id="TxtDireccion" class="form-control text-capitalize" tabindex="4"  onkeypress="return handleEnter(this, event)" required  autocomplete="off" >
                            
                        </div>

                  </div>


                  <div class="col-md-5">
                        <div class="form-group">
                             <label for="email">Email</label>
                                <input type="text" name="TxtEmail" id="TxtEmail" class="form-control te" tabindex="5"  onkeypress="return handleEnter(this, event)"  style="text-transform: lowercase" required  autocomplete="off" >
                            
                        </div>

                  </div>
 
          </div>
 

      </div>
        <!-- /.box-body -->
    <div class="box-footer">
         
          
<!-- Botones -->                              
    <div class="row">                           
        <div class="col-md-11 text-right">
  
          <button type="reset" class="btn btn-default"><a onclick="location.href ='#'"><span class="glyphicon glyphicon-remove"  tabindex="5"></span> Cancelar</a></button>
             <button type="submit" id="guardar" class="btn btn-primary"><span class="glyphicon glyphicon-check"  tabindex="6"></span> Guardar</button> 
         </div>
    </div>


        </div>
   
        <!-- /.box-footer-->
    
     </form>
   
  </div>
      <!-- /.box -->
   

  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     



    
 
  


