<?php
// Verifica si no existe una sesión activa antes de iniciar una nueva
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Comprueba si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirige a la página de inicio de sesión si no está autenticado
    exit();
}
?>

<div class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-start">Tablero Principal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tablero Principal</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProductos"></h4>
                        <p>Productos registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalCompras">Bs./120</h4>
                        <p>Total compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalVentas">Bs./300</h4>
                        <p>Total ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalGanancias">Bs./100</h4>
                        <p>Total ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalProductosMinStock">2</h4>
                        <p>Productos poco stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-alert"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy">Bs./50</h4>
                        <p>Ventas del día</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-calendar"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Ventas del Mes: Bs./1000</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Los 10 productos mas vendidos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tbl_productos_mas_vendidos">
                                    <thead>
                                        <tr>
                                            <th>Cod. producto</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Ventas</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Productos con poco stock</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tbl_productos_poco_stock">
                                    <thead>
                                        <tr>
                                            <th>Cod. producto</th>
                                            <th>Producto</th>
                                            <th>Stock Actual</th>
                                            <th>Mínimo Stock</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html(respuesta[0]['totalCompras']);
                $("#totalVentas").html(respuesta[0]['totalVentas']);
                $("#totalGanancias").html(respuesta[0]['ganancias']);
                $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
                $("#totalVentasHoy").html(respuesta[0]['ventasHoy']);

                
                

            }
        });
    });



    /* =======================================================
        SOLICITUD AJAX TARJETAS INFORMATIVAS
        =======================================================*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        data: {
            'accion': 1 //parametro para obtener las ventas del
        },
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);

        }
    });





</script>