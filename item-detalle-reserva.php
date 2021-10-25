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
    <!-- Color picker plugins css -->
    <link href="./plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="./plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="./plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                        <div class="card">

                            <div class="">
                                <div class="card-body">
                                    <!--<h4 class="card-title">Material Date picker</h4>
                                    <h6 class="card-subtitle">Use <code>.bootstrapMaterialDatePicker</code> to create it.</h6>
                                -->
                                    <div class="row form-material">
                                        <div class="col-md-4">
                                            <label class="m-t-40">Fecha Inicial</label>
                                            <input type="text" class="form-control" placeholder="set min date" id="min-date" data-dtp="dtp_sHpQB">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="m-t-40">Fecha Final</label>
                                            <input type="text" class="form-control" placeholder="set min date" id="min-date" data-dtp="dtp_sHpQB">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="m-t-40">Acción</label><br>
                                            <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20" type="button"><i class="fa fa-search" aria-hidden="true"></i> Generar Busqueda</button>
                                        </div>
                                    </div>
                                    <div class="active-member">
                                        <div class="table-responsive">
                                            <table class="table table-xs mb-0 zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Cliente</th>
                                                        <th>Telefono</th>
                                                        <th>N° Reserva</th>
                                                        <th>Fecha Reserva</th>
                                                        <th>N° Personas</th>
                                                        <th>Estado Reserva</th>
                                                        <th>Total</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Carlos Smith</td>
                                                        <td>1234587896</td>
                                                        <td>00008</td>
                                                        <td>
                                                            <span>15/10/2121 14:00</span>
                                                        </td>
                                                        <td>3 Personas</td>
                                                        <td><i class="fa fa-circle-o text-danger  mr-2"></i> Pendiente</td>
                                                        <td class="td-codigo"><strong>25.25 $</strong></td>
                                                        <td>
                                                            <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-eye m-r-5"></i> Detalle</button>
                                                            <button class="btn btn-dark m-b-30" type="button"><i class="fa fa-money m-r-5"></i> Pagar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./images/avatar/2.jpg" class=" rounded-circle mr-3" alt="">Miguel Ramón.</td>
                                                        <td>5876543781</td>
                                                        <td><span>00152</span></td>
                                                        <td>
                                                            <span>15/10/2121 15:30</span>
                                                        </td>
                                                        <td>5 Personas</td>
                                                        <td>
                                                            <i class="fa fa-circle-o text-danger  mr-2"></i> Pendiente
                                                        </td>
                                                        <td class="td-codigo"><strong>15.50 $</strong></td>
                                                        <td>
                                                            <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-eye m-r-5"></i> Detalle</button>
                                                            <button class="btn btn-dark m-b-30" type="button"><i class="fa fa-money m-r-5"></i> Pagar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                                        <td>1234567896</td>
                                                        <td>00001</td>
                                                        <td>
                                                            <span>15/10/2121 18:00</span>
                                                        </td>
                                                        <td>10 Personas</td>
                                                        <td><i class="fa fa-circle-o text-success  mr-2"></i> Pagado</td>
                                                        <td class="td-codigo"><strong>35.80 $</strong></td>
                                                        <td>
                                                            <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-eye m-r-5"></i> Ver Detalle</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./images/avatar/2.jpg" class=" rounded-circle mr-3" alt="">Walter R.</td>
                                                        <td>9876543281</td>
                                                        <td><span>00152</span></td>
                                                        <td>
                                                            <span>15/10/2121 19:30</span>
                                                        </td>
                                                        <td>5 Personas</td>
                                                        <td>
                                                            <i class="fa fa-circle-o text-success  mr-2"></i> Pagado
                                                        </td>
                                                        <td class="td-codigo"><strong>150.25 $</strong></td>
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
    <!-- Color Picker Plugin JavaScript -->
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


    <script src="./js/plugins-init/form-pickers-init.js"></script>

</body>

</html>