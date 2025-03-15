<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/dashboard.php','content-wrapper')" id="tab-home">
        Home
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/productos.php','content-wrapper')" id="tab-inventario">
        Inventario
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/facturacion.php','content-wrapper')" id="tab-facturacion">
        Facturación
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/reportes.php','content-wrapper')" id="tab-reportes">
        Reportes
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="logout.php" class="nav-link">Cerrar Sesión</a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
