<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar producto

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaEmpresa">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Empresa</th>
           <th>Dirección</th>
           <th>Teléfono</th>
           <th>Celular</th>
           <th>Ciudad</th>
           <th>Responsable</th>
           <th>Email</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>

       

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" class="perfilUsuario">

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar datos de empresa</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control" name="nuevoCliente" placeholder="Ingresar nombre empresa" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-hashtag"></i></span> 

                <input type="text"  class="form-control" name="nuevoDocumentoId" placeholder="Ingresar Nit" required>

              </div>

            </div>


            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control" name="nuevoTelefono" placeholder="Ingresar teléfono" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span> 

                <input type="text" class="form-control" name="nuevoCelular" placeholder="Ingresar celular" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA CELULAR -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control" name="nuevaCiudad" placeholder="Ingresar celular"  required>

              </div>

            </div>

             
            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>
  

          
            <!-- ENTRADA PARA SUBIR FOTO -->

       <div class="row">
                       
         <div class="col-md-6">
        
           <div class="form-group">
             
              
              <div class="panel">SUBIR IMAGEN</div>

              
            <span class="btn btn-primary btn-file">
                       Buscar logo empresa      <input type="file" class="nuevaImagen" name="nuevaImagen">
            </span>
                      <p class="help-block">Peso máximo de la imagen 2MB</p>

              </div>
        </div>

            <div class="col-md-6">
        
              <div class="form-group">       
                    
                    <img src="vistas/img/productos/empresa/logo_empresa.png" class="img-thumbnail previsualizar" width="120px">
         

             </div>
          
         </div>           
       
        </div>

        </div>

      </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar datos</button>

        </div>

      </form>
           
      <?php

        $crearEmpresa = new ControladorEmpresa();
        $crearEmpresa -> ctrCrearEmpresa();

      ?>


    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control" name="editarEmpresa" id="editarEmpresa" required>
                <input type="hidden" id="idCliente" name="idCliente">
              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-hashtag"></i></span> 

                <input type="text"  class="form-control" name="editarEmpresa" id="editarEmpresa" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control" name="editarEmpresa" id="editarEmpresa" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control" name="editarTelefono" id="editarTelefono" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control" name="editarCelular" id="editarCelular"  required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control" name="editarCiudad" id="editarCiudad"   required>

              </div>

            </div>
  
          </div>

        </div>


 <div class="row">
                       
         <div class="col-md-6">
        
           <div class="form-group">
             
              
              <div class="panel">SUBIR IMAGEN</div>

              
            <span class="btn btn-primary btn-file">
                       Buscar logo empresa      <input type="file" class="nuevaImagen" name="nuevaImagen">
            </span>
                      <p class="help-block">Peso máximo de la imagen 2MB</p>

              </div>
        </div>

            <div class="col-md-6">
        
              <div class="form-group">       
                    
                    <img src="vistas/img/productos/empresa/logo_empresa.png" class="img-thumbnail previsualizar" width="120px">
         

             </div>
          
         </div>           
       
        </div>

        </div>

      </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarEmpresa = new ControladorEmpresa();
        $editarEmpresa -> ctrEditarEmpresa();

      ?>

    

    </div>

  </div>

</div>

<?php

  $eliminarEmpresa = new ControladorEmpresa();
  $eliminarEmpresa -> ctrEliminarEmpresa();

?>


