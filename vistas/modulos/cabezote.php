<header class="main-header">

<style type="text/css">
	
@media (max-width: 480px){
    .buscar{
    	display: none;
    }
}	

</style>

 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo">
		
		<!-- logo mini -->
		<span class="logo-mini">
			
			<img src="vistas/img/plantilla/logo-mini.png" class="img-responsive" style="padding:10px">

		</span>

		<!-- logo normal -->

		<span class="logo-lg">
			
			<img src="vistas/img/plantilla/logo-software-veterinario.png" class="img-responsive" style="padding:10px 0px">

		</span>

	</a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
               
             
				<form class="navbar-form navbar-left buscar" role="search">

			       <div class="form-group">
			        
			          <input type="text" class="form-control text-capitalize" width="70;" id="navbar-search-input" placeholder="buscar cliente">
			        </div>
			         
			    </form>
			    		
			          <!-- Notifications: style can be found in dropdown.less -->
			          <li class="dropdown notifications-menu">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			              <i class="fa fa-bell-o"></i>
			              <span class="label label-warning">10</span>
			            </a>
			            <ul class="dropdown-menu">
			              <li class="header">You have 10 notifications</li>
			              <li>
			                <!-- inner menu: contains the actual data -->
			                <ul class="menu">
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
			                      page and may cause design problems
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-users text-red"></i> 5 new members joined
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-user text-red"></i> You changed your username
			                    </a>
			                  </li>
			                </ul>
			              </li>
			              <li class="footer"><a href="#">View all</a></li>
			            </ul>
			          </li>
               

				<li class="dropdown user user-menu">
		             <a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php
					if($_SESSION["foto"] != ""){

						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

					}else{


						echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

					}


					?>
						
						<span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span>

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">
						
						<li class="user-body">
							
							<div class="pull-right">
								
								<a href="salir" class="btn btn-default btn-flat">Salir</a>

							</div>

						</li>

					</ul>
                 </li>
          <!-- Control Sidebar Toggle Button -->
            <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
 

</script>
  </header>
