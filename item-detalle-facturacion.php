<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trailer Movil Events</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

    <!-- Custom Stylesheet -->
    <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="./plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<?php
     include 'templates/preloader.php'
    ?>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="show menu-toggle">

    <?php
        include 'templates/nav-header.php'
        ?>


        <?php
        include 'templates/header.php'
        ?>


        <?php
        include 'templates/sk-sidebar.php'
        ?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <!--<div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order Summary</h4>
                                    <div id="morris-bar-chart"></div>
                                </div>
                            </div>
                            
                        </div>    
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                    <h5 class="text-muted">Order Overview </h5>
                                    <h2 class="mt-4">5680</h2>
                                    <span>Total Revenue</span>
                                    <div class="mt-4">
                                        <h4>30</h4>
                                        <h6>Online Order <span class="pull-right">30%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar"><span class="sr-only">30% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>50</h4>
                                        <h6 class="m-t-10 text-muted">Offline Order <span class="pull-right">50%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"><span class="sr-only">50% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>20</h4>
                                        <h6 class="m-t-10 text-muted">Cash On Develery <span class="pull-right">20%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-warning" style="width: 20%;" role="progressbar"><span class="sr-only">20% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-0">
                                    <h4 class="card-title px-4 mb-3">Todo</h4>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul id="todo_list">
                                                    <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>Don't give up the fight.</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Do something else</span><a href='#' class="ti-trash"></a></label></li>
                                                </ul>
                                            </div>
                                            <div class="px-4">
                                                <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="">

                            <div class="card">
                                <div class="card-body">
                                    <!--<h4 class="card-title">Material Date picker</h4>
                                    <h6 class="card-subtitle">Use <code>.bootstrapMaterialDatePicker</code> to create it.</h6>
                                -->
                                    <div class="row form-material">
                                        <div class="col-md-2">
                                            <label class="m-t-40">Fecha Inicial</label>
                                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="mdate" data-dtp="dtp_sHpQB">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="m-t-40">Fecha Final</label>
                                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="mdateMax" data-dtp="dtp_sHpQB">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="m-t-40">Acción</label><br>
                                            <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20" type="button"><i class="fa fa-search" aria-hidden="true"></i> Generar Busqueda</button>
                                        </div>
                                    </div>
                                    <!--<br>-->
                                    <div class="active-member">
                                        <div class="table-responsive">
                                            <table class="table table-xs mb-0 zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>N° Factura</th>
                                                        <th>Tipo Factura</th>
                                                        <th>Cliente(DNI/RUC)</th>
                                                        <th>Responsable(Cajero)</th>
                                                        <th>Fecha Facturación</th>
                                                        <th>Total</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1542220000</td>
                                                        <td>Personal</td>
                                                        <td>06089666368</td>
                                                        <td>Juan Flores</td>
                                                        <td>2021/10/10 05:25:23</td>
                                                        <td class="td-codigo"><strong>25.25 $</strong></td>
                                                        <td>
                                                            <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-eye m-r-5"></i> Ver Detalle</button>
                                                            <!--<button class="btn btn-dark m-b-30" type="button"><i class="fa fa-money m-r-5"></i> Pagar</button>-->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8472222100</td>
                                                        <td>Consumidor Final</td>
                                                        <td>10089555368</td>
                                                        <td>Luis Juca</td>
                                                        <td>2021/10/10 17:05:00</td>
                                                        <td class="td-codigo"><strong>10.50 $</strong></td>
                                                        <td>
                                                            <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-eye m-r-5"></i> Ver Detalle</button>
                                                            <!--<button class="btn btn-dark m-b-30" type="button"><i class="fa fa-money m-r-5"></i> Pagar</button>-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <?php
        include 'templates/footer.php'
        ?>
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>


    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


    <script src="./js/plugins-init/form-pickers-init.js"></script>


    <script>
        // MAterial Date picker
        $('#mdateMax').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
    </script>

    <style>
        #DataTables_Table_0_length {
            display: none;
        }
        
        #DataTables_Table_0_wrapper div div div {
            height: 2rem !important;
        }
        
        #DataTables_Table_0_filter label {
            display: flex !important;
        }
    </style>

</body>

</html>