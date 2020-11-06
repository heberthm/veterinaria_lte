<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title> Software Veterinario</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/favicon.ico">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

<!-- Jquery ui -->

  <link rel="stylesheet" href="../vistas/bower_components/jquery-ui/themes/base/jquery-ui.min.css" type="text/css" />
 
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">


  <!-- Jquery ui -->
  <link rel="stylesheet" href="../vistas/bower_components/font-awesome/css/font-awesome.min.css"> 



   
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">


  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
 

 <!-- Toastr -->
  <link rel="stylesheet" href="vistas/dist/css/toastr.min.css">


<!-- Select2 -->
   <link href="vistas/plugins/select2/css/select2.min.css" rel="stylesheet" /> 

  <!-- Select2-bootstrap -->
   <link href="vistas/plugins/select2-bootstrap/dist/select2-bootstrap.min.css" rel="stylesheet" /> 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">


<!-- FullCalendar -->
  
  <link href='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.min.css' rel='stylesheet' />
<!-- FullCalendar -->
 <link href='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.print.css' rel='stylesheet' media='print' />



                          


  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Datetimepicker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">







  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="../vistas/bower_components/jquery/dist/jquery.min.js"></script>
  


    <!-- jQuery Version 1.12.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>




  <!-- Bootstrap 3.3.7 -->
  <script src="../vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


   


   <!-- FullCalendar -->
   <script src='https://unpkg.com/moment@2.24.0/min/moment.min.js'></script>
  
  <script src='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.min.js'></script>

  <script src="vistas/bower_components/locale/es.js"></script>


<!-- Select2 -->
  <script src="../vistas/plugins/select2/js/select2.full.js"></script> 


<!-- typeahead -->
 <!-- <script src="vistas/plugins/typeahead/bootstrap3-typeahead.min.js"></script> -->


  <!-- FastClick -->
  <script src="../vistas/bower_components/fastclick/lib/fastclick.js"></script>
  



  <!-- AdminLTE App -->
  <script src="../vistas/dist/js/adminlte.min.js"></script>



  <!-- AdminLTE App -->
  <script src="../vistas/bower_components/toastr.min.js"></script>


 

  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/dataTables.tableTools.js"></script>
  <script src="vistas/bower_components/datatables.net/js/buttons.html5.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/dataTables.buttons.min.js" ></script>
  <script src="vistas/bower_components/datatables.net/js/buttons.flash.min.js" ></script>
  <script src="vistas/bower_components/datatables.net/js/pdfmake.min.js" ></script>
  <script src="vistas/bower_components/datatables.net/js/buttons.print.min.js" ></script>
  <script src="vistas/bower_components/datatables.net/js/jquery.number.js" ></script>


  <script src="vistas/bower_components/datatables.net/js/jszip.min.js" ></script>
  <script src="vistas/bower_components/datatables.net/js/vfs_fonts.js" ></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vistas/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker -->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


<!-- datetimepicker -->
  <script src="vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


  <!-- Morris.js charts -->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS -->
  <script src="vistas/bower_components/Chart.js/Chart.js"></script>

  
  <script src="vistas/js/lista_de_espera.js"></script>







</head>
<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue-light sidebar-mini login-page">
 
  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/

    include "modulos/cabezote.php";

    /*=============================================
    MENU
    =============================================*/

    include "modulos/menu.php";


 /*=============================================
    MENU IZQUIERDO CONFIGURACIÓN GRAL
    =============================================*/

    include "modulos/menu-izquierdo.php";





    /*=============================================
    CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "citas-hoy" ||
         $_GET["ruta"] == "recepcion" ||
         $_GET["ruta"] == "crear-datos-empresa" ||
         $_GET["ruta"] == "gestion-medica" ||
         $_GET["ruta"] == "usuarios" ||
         $_GET["ruta"] == "categorias" ||
         $_GET["ruta"] == "productos" ||
         $_GET["ruta"] == "clientes" ||
         $_GET["ruta"] == "ventas" ||
         $_GET["ruta"] == "crear-venta" ||
         $_GET["ruta"] == "editar-venta" ||
         $_GET["ruta"] == "reportes" ||
         $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*=============================================
    FOOTER
    =============================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }

  ?>

<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/categorias.js"></script>
<script src="vistas/js/productos.js"></script>
<script src="vistas/js/empresa.js"></script>
<script src="vistas/js/clientes.js"></script>
<script src="vistas/js/ventas.js"></script>
<script src="vistas/js/reportes.js"></script>

</body>
</html>


