<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="vistas/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Polaris</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                  <!-- Tablero Principal -->
                  <li class="nav-item has-treeview">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/dashboard.php','content-wrapper')">
                        <i class="nav-icon fas fa-tachometer-alt"></i> <!-- Icono de Dasboard -->
                        <p>
                            Tablero Principal
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
		            </li>

                <!-- Menú Productos -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i> <!-- Icono de Cajas para Productos -->
                        <p>
                            Productos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/productos.php','content-wrapper')">
                                <i class="fas fa-warehouse nav-icon"></i> <!-- Icono de Almacén -->
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/categoria_productos.php','content-wrapper')">
                                <i class="fas fa-tags nav-icon"></i> <!-- Icono de Etiquetas -->
                                <p>Categoría</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/carga_masiva_productos.php','content-wrapper')">
                                <i class="fas fa-upload nav-icon"></i> <!-- Icono de Subida -->
                                <p>Carga Masiva</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Menú Ventas -->
                <li class="nav-item has-treeview">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
                        <i class="nav-icon fas fa-shopping-cart"></i> <!-- Icono de Carrito -->
                        <p>
                            Ventas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/historial_de_ventas.php','content-wrapper')">
                                <i class="fas fa-history nav-icon"></i> <!-- Icono de Historial -->
                                <p>Historial de Ventas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/facturacion.php','content-wrapper')">
                                <i class="fas fa-file-invoice-dollar nav-icon"></i> <!-- Icono de Factura -->
                                <p>Facturación</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/reportes.php','content-wrapper')">
                                <i class="fas fa-chart-line nav-icon"></i> <!-- Icono de Gráfica -->
                                <p>Reportes</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Menú Clientes -->
                <li class="nav-item has-treeview">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/clientes.php','content-wrapper')">
                        <i class="nav-icon fas fa-users"></i> <!-- Icono de Clientes -->
                        <p>
                            Clientes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/lista_de_clientes.php','content-wrapper')">
                                <i class="fas fa-list nav-icon"></i> <!-- Icono de Lista -->
                                <p>Lista de Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/nuevo_cliente.php','content-wrapper')">
                                <i class="fas fa-user-plus nav-icon"></i> <!-- Icono de Agregar Cliente -->
                                <p>Nuevo Cliente</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Menú Configuración -->
                <li class="nav-item has-treeview">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/configuracion.php','content-wrapper')">
                        <i class="nav-icon fas fa-cog"></i> <!-- Icono de Configuración -->
                        <p>
                            Configuración
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ajustes_generales.php','content-wrapper')">
                                <i class="fas fa-tools nav-icon"></i> <!-- Icono de Herramientas -->
                                <p>Ajustes Generales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/usuarios.php','content-wrapper')">
                                <i class="fas fa-user-cog nav-icon"></i> <!-- Icono de Usuarios -->
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/acceso.php','content-wrapper')">
                                <i class="fas fa-key nav-icon"></i> <!-- Icono de Acceso -->
                                <p>Acceso</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Cerrar Sesión -->
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Cerrar Sesión</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- jQuery Script para manejar la funcionalidad del menú -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.nav-item.has-treeview > a').click(function (e) {
            e.preventDefault(); 
            let parent = $(this).parent();

            if (parent.hasClass('menu-open')) {
                parent.removeClass('menu-open');
                parent.find('.nav-treeview').slideUp();
            } else {
                $('.nav-item.has-treeview').removeClass('menu-open');
                $('.nav-treeview').slideUp();
                parent.addClass('menu-open');
                parent.find('.nav-treeview').slideDown();
            }
        });
    });
</script>
