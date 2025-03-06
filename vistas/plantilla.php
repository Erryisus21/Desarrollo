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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php
        include "assets/modulos/navbar.php";
        include "assets/modulos/aside.php";

    ?>

<!-- Content Wrapper. Contains page content -->
    <?php
        include "vistas/dashboard.php";?>

  <?php include "assets/modulos/footer.php"; ?>
  
</div>
<!-- ./wrapper -->
 <script>
  function CargarContenido(pagina_php,contenedor){
    $("." + contenedor).load(pagina_php);

  }
  </script>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

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
