 <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-light">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-gears">  </i> Crear datos iniciales</a></li>
       <!--   <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-user-md"></i></a></li> -->
      
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab"></div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab"> 
          
 
    <?php

      if($_SESSION["perfil"] == "Administrador"){

      echo '         
            <ul class="control-sidebar-menu">


              <li class="active">
                 <a href="crear-datos-empresa">  <i class="fa fa-building-o"></i> <span> Crear datos empresa</span>  </a>

              </li>     

               <li> 
                 <a href="crear-medico"> <i class="fa fa-user-md"></i> <span> Crear médicos</span> </a>
               </li>

               <li>
                 <a href="citas-hoy"> <i class="fa fa-cut"></i> <span> Crear peluqueros</span> </a>
               </li>

               <li>
                 <a href="gestion-medica"> <i class="fa fa-percent"></i> <span>  Crear porcentaje IVA</span> </a>
               </li>

               <li>
                 <a href="usuarios"> <i class="fa fa-umbrella"></i> <span> Crear tipo de baño</span> </a> 
               </li>  

               <li>
                 <a href="gestion-medica"> <i class="fa fa-retweet"></i> <span>  Crear Marcas</span> </a>
              </li>
               
        
               <li>
                 <a href="gestion-medica"> <i class="fa fa-sort-amount-asc"></i> <span>  Crear unidad medida</span> </a>
              </li>

               <li>
                 <a href="gestion-medica"> <i class="fa fa-truck"></i> <span>  Crear proveedores</span> </a>
              </li>



          </ul> ';

            }

          ?>


            <!-- /.form-group -->
        
        </div>
        <!-- /.tab-pane -->
     
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <!--  <h3 class="control-sidebar-heading">Configuración clinica</h3> -->
          <ul class="control-sidebar-menu">
        
               

          </ul>
         

          </div>

        </div>
      
    </aside>
  
  