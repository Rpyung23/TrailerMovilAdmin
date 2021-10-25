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
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
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

            <!-- row -->

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">


                        <div class="top-navegation">


                            <label class="m-t-20">Fecha Busqueda</label>

                            <div class="container-input">
                                <div class="input-fechas">
                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="mdate" data-dtp="dtp_hbOB4">

                                    <button class="btn btn-dark m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button">
                                            <i class="fa fa-search m-r-5"></i> Buscar Reserva</button>
                                </div>

                                <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            <i class="fa fa-plus m-r-5"></i> Agregar Reserva</button>
                            </div>

                        </div>

                        <br>
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-xs mb-0 zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>N° Reserva</th>
                                                <th>Dni Cliente</th>
                                                <th>Nombre Cliente</th>
                                                <th>Fecha Reserva</th>
                                                <th>N° Personas</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-codigo"><strong>12024568542</strong></td>
                                                <td><strong>0604633527</strong></td>
                                                <td>Nelson P Yunga Guaman</td>
                                                <td>
                                                    <span class="badge badge-primary badge-sm m-t-5">2021/11/07 18:50:00</span>
                                                </td>
                                                <td><strong>10</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-codigo"><strong>12024568542</strong></td>
                                                <td><strong>0604633527</strong></td>
                                                <td>Nelson P Yunga Guaman</td>
                                                <td>
                                                    <span class="badge badge-primary badge-sm m-t-5">2021/11/07 18:50:00</span>
                                                </td>
                                                <td><strong>10</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-codigo"><strong>12024568542</strong></td>
                                                <td><strong>0604633527</strong></td>
                                                <td>Nelson P Yunga Guaman</td>
                                                <td>
                                                    <span class="badge badge-primary badge-sm m-t-5">2021/11/07 18:50:00</span>
                                                </td>
                                                <td><strong>10</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-codigo"><strong>12024568542</strong></td>
                                                <td><strong>0604633527</strong></td>
                                                <td>Nelson P Yunga Guaman</td>
                                                <td>
                                                    <span class="badge badge-primary badge-sm m-t-5">2021/11/07 18:50:00</span>
                                                </td>
                                                <td><strong>10</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-codigo"><strong>12024568542</strong></td>
                                                <td><strong>0604633527</strong></td>
                                                <td>Nelson P Yunga Guaman</td>
                                                <td>
                                                    <span class="badge badge-primary badge-sm m-t-5">2021/11/07 18:50:00</span>
                                                </td>
                                                <td><strong>10</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
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



    <!-- Large modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nueva Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                </div>
                <div class="modal-body">

                    <div class="col-lg-12">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>N° Reserva</label>
                                    <input type="text" disabled class="form-control" placeholder="1005#######">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Dni Cliente</label>
                                    <input type="text" class="form-control" placeholder="060########">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nombres Completos</label>
                                    <input type="text" class="form-control" placeholder="N... P... Y... G...">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Fecha Reserva</label>
                                    <input type="text" class="form-control" placeholder="set min date" id="min-date" data-dtp="dtp_iP2n2">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>N° Personas</label>
                                    <input type="number" class="form-control" placeholder="# personas">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>


    <!-- UPDATE Large modal -->

    <div class="modal fade bd-edit-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualización de Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-lg-12">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>N° Reserva</label>
                                    <input type="text" disabled class="form-control" placeholder="1005#######">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Dni Cliente</label>
                                    <input type="text" class="form-control" placeholder="060########">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nombres Completos</label>
                                    <input type="text" class="form-control" placeholder="N... P... Y... G...">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Fecha Reserva</label>
                                    <input type="text" class="form-control" placeholder="set min date" id="min-date" data-dtp="dtp_iP2n2">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>N° Personas</label>
                                    <input type="number" class="form-control" placeholder="# personas">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>



    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <!--<script src="./plugins/sweetalert/js/sweetalert.init.js"></script>-->

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>


    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).on("click", ".sweet-confirm", function() {
            swal({
                title: "Desea eliminar este item?",
                text: "No podrás recuperar este archivo imaginario !!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Eliminar",
                closeOnConfirm: !1
            }, function() {
                swal("Eliminado !!", "¡¡Oye, tu archivo imaginario ha sido eliminado !!", "success")
            })
        })
    </script>

    <script src="./js/plugins-init/form-pickers-init.js"></script>


    <style>
        .input-fechas {
            display: flex;
        }
        
        .container-input {
            display: flex;
            justify-content: space-between;
        }
    </style>


</body>

</html>