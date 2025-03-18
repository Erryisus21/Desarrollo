<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Polaris</title>

  <link rel="shortcut icon" href="vistas/assets/dist/img/AdminLTELogo.png" type="image/x-icon">

  <link rel="stylesheet" href="style.css">

<!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">
  <link rel="stylesheet" href="vistas/assets/dist/css/inventarios.css">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php
        include "assets/modulos/navbar.php";
        include "assets/modulos/aside.php";

    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <?php include "vistas/dashboard.php"; ?>
  
  </div>
  <?php include "assets/modulos/footer.php"; ?>

</div>
<!-- ./wrapper -->
 <script>
  function CargarContenido(pagina_php,contenedor){
    $("." + contenedor).load(pagina_php);

  }
  </script>

<!-- ============================================================================================================= -->
    <!-- REQUIRED SCRIPTS -->
    <!-- ============================================================================================================= -->

    <!-- jQuery -->
    <script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
    
    <!-- Bootstrap 4 -->
    <script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- ChartJS -->
    <script src="vistas/assets/plugins/chart.js/Chart.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="vistas/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- JS Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
     <!--  <script src="vistas/assets/dist/js/adminlte.min.js"></script>-->

<script>
document.addEventListener("DOMContentLoaded", function () {
    let navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            // Remueve la clase "active" de todos los links
            navLinks.forEach(nav => nav.classList.remove("active"));
            // Agrega la clase "active" al link seleccionado
            this.classList.add("active");

            // Guardar la pestaña activa en localStorage
            localStorage.setItem("activeTab", this.id);
        });
    });

    // Recuperar la pestaña activa al recargar la página
    let activeTab = localStorage.getItem("activeTab");
    if (activeTab) {
        document.getElementById(activeTab)?.classList.add("active");
    }
});
</script>


</body>
</html>
