<link rel="stylesheet" href="vistas/dist/css/estilos_generales.css">

<div class="content-wrapper">
  <section class="content-header">
    
    <h1>
      
     Crear datos iniciales
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear datos iniciales</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
             
<div class="col-lg-12">        
<div class="nav-collapse">
<ul class="nav nav-pills ">

<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-building-o fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear datos empresa</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-user-md fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear médico</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-cut fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear peluquero</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class=" fa fa-dollar fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear valor inpuesto</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-puzzle-piece fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear pruducto</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-umbrella fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear tipo de baño</a></i></li>

<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-gift fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear tipo de baño</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-tag fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear categorías</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-retweet fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear marcas</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class="fa fa-sort-amount-asc fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear unidad de medidas</a></i></li>


<li><a data-target="#modalAgregarUsuario" data-toggle="modal"><i class=" fa fa-truck fa-2x"  style="color:#0D6EBA; font-size: 20px; cursor: pointer;" href="#modalAgregarUsuario" >&nbsp; Crear proveedores</a></i></li>


<li></li>


</ul>
</div>
</div>


      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL CONFIGURAR DATOS DE EMPRESA
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog" >
  
  <div class="modal-dialog" >

    <div class="modal-content">

     
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal" style="color: white">&times;</button>

          <h4 class="modal-title">Crear datos de empresa</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->


 <div class="modal-body">
   <div class="controls col-lg-12 ">
      <div class="row"> 


  <form name="clientForm" id="clientForm"   method="POST"  role="form" enctype="multipart/form-data" />

  <input type="hidden" name="TxtFecha"  <?php $fecha= date("Y-m-d")?> value="<?php echo $fecha?>">
                           
  <input type="hidden" name="TxtNombre" id="TxtNombre" value="logo">

  <input type="hidden" name ="TxtEmail_usuario" id="TxtEmail_usuario" value="<?php echo $email_usuario?>" >
 
  <input type="hidden" name ="TxtUsuario" id="TxtUsuario" value="<?php echo $usuario?>" >
                 

         

                                                                                                      
                                                        
                             <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="Nombre empresa">Nombre empresa</label>
                                        <input name="TxtNombre_empresa" id="TxtNombre_empresa" type="text" tabindex="1"    class="form-control text-capitalize"  onkeypress="return handleEnter(this, event)" required autofocus>
                                        <div class="help-block with-errors"></div>
                                    </div>
                             </div>
                            
                         
                               
                                
                                                        
                             
                            <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="dirreccion">Dirección </label>
                                        <input name="TxtDireccion" id="TxtDireccion" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required tabindex="4"   >
                                        <div class="help-block with-errors"></div>
                                    </div>
                            </div>
                         
                                
              
                 
                           <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input name="TxtTelefono" id="TxtTelefono" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required tabindex="4"   >
                                        <div class="help-block with-errors"></div>
                                    </div>
                           </div>
                          
                   
 <!--                  
   <p><font style=" font-size:18px"  color="#003399" >Datos de peluquería</font> </p>
-->             
                               
                            
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="celular">Celular</label>
                                       <input type="text" name="TxtCelular" id="TxtCelular"        class="form-control"   required tabindex="5" > 
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                           
                             
                           
                               
                            
                                 <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="responsable">Responsable</label>
                                      
<input type="text" name="TxtResponsable" id="TxtResponsable"  tabindex="6"     class="form-control text-capitalize" required >

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                             
                                
       
       
                      
                                 <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="ciudad">Ciudad</label>
                                      
<input type="text" name="TxtCiudad" id="TxtCiudad"  tabindex="7"     class="form-control text-capitalize" required >

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                           

                            
                     
                                 <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                      
<input type="text" name="TxtEmail" id="TxtEmail"  tabindex="7"     class="form-control " required >

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            
                            
       
                           
                              
                 
       <div class="col-md-5"> 
       
       <div class="form-group">
                         <label for="Subir imagen">Seleccionar logo</label>
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Eliminar
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Buscar imagen</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="file" id="file" required  /> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
            <span></span> <p><font style="color: gray; size: 12px;">Archivo con extensión .png con transparencias, no están soportados. </font></p></span>
        </div>
    </div>
 </div>  

 
 <br>
        
                                              
  <div class="enlace_listado">  
           
     <p>  <a href="Editar_configuracion.php"><i class="fa fa-cog fa-fw"></i>&nbsp; Cambiar datos actuales de la empresa</a>   </p> 
 </div>       
             
             

  <br>  
                                
 <!-- Botones -->                              
   <div class="row">                           
    <div class="col-sm-10 text-right">
  

       <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"  tabindex="8"></span> Cancelar</button>

       <button type="submit" id="guardar" class="btn btn-primary"><span class="glyphicon glyphicon-check"  tabindex="9"></span> Guardar</button> 

              
        
        </div>
      </div>
      </div>
       </form>
    </div>
   </div>
  </div>
  </div>
 

 <script src="../vistas/plantillas.php"></script>

<script type="text/javascript">
  
  $(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Vista previa</strong>"+$(closebtn)[0].outerHTML,
        content: "No hay imágen",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Buscar imágen"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Cambiar imágen");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

</script>   