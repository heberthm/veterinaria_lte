<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

			if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>';
            }

			 if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo'
				<li>

					<a href="citas-hoy">

						<i class="fa fa-calendar"></i>
						<span>Citas para hoy</span>

					</a>

				</li>';
          }
         
		 if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo'<li>

					<a href="recepcion">

						<i class="fa fa-circle-o"></i>
						<span>Recepción</span>

					</a>

				</li>';

			}

     
       if($_SESSION["perfil"] == "Administrador"){

			echo '

             <li>

				<a href="gestion-medica">

					<i class="fa fa-user-md"></i>
					<span>Gestión médica</span>

				</a>

			</li>



			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

			}


    		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>';

			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo'<li>

					<a href="clientes">

						<i class="fa fa-users"></i>
						<span>Clientes</span>

					</a>

				</li>';

			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar ventas</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>

						</a>

					</li>';

                  

					if($_SESSION["perfil"] == "Administrador"){

						date_default_timezone_set('America/Bogota');

						$fechaHasta = date('Y-m-d');

						$fechaDesde = date('Y-m-d', strtotime('-1 month'));

						echo '<li>

						<a href="index.php?ruta=reportes&fechaInicial='.$fechaDesde.'&fechaFinal='.$fechaHasta.'"><i class="fa fa-circle-o"></i>
						<span>Reporte de ventas</span>

						</a>

					</li>';

				}

				echo '</ul>

			</li>';

			 echo'<li>

					<a href="salir">

						<i class="fa fa-power-off"></i>
						<span>Salir</span>

					</a>

				</li>';


		}

		?>

		</ul>

	 </section>

</aside>