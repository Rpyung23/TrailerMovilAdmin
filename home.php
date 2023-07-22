<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trailer Movil Events</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
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
                

            <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Inverciones</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white" id="inverisones">$ 0</h2>
                                    <p class="text-white mb-0" id="inverisones-txt">Mes Actual</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Ganancias</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white" id="ganancias">$ 0</h2>
                                    <p class="text-white mb-0" id="ganancias-txt">Mes Actual</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Empleados</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white" id="activos">45</h2>
                                    <p class="text-white mb-0">Activos</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Satisfación Cliente</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white" id="satisfacion">3/5</h2>
                                    <p class="text-white mb-0"></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-star"></i></span>
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
    <script src="environment/env.js"></script>
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <!--<script src="./plugins/sweetalert/js/sweetalert.init.js"></script>-->



    <script src="./js/dashboard/dashboard-1.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>


    <script>
        $(document).on("click", ".sweet-confirm", function()
        {
            var element = $(this)[0]
            console.log(element)

            swal({
                title: "Desea pagar esta factura?",
                text: "La factura N° "+element+" sera pagada en su totalidad!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Aceptar",
                closeOnConfirm: !1
            }, function() {
                swal("Pagada !!", "¡¡La factura #45556666 ha sido pagada con éxito !!", "success")
            })
        })

        function UltimoDayMes()
        {
            var date = new  Date()
            var mes = date.getMonth()+1;

            switch(mes)
            {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    return 31
                    break;
                case 2:
                                /**BISIESTO**/
                    if(date.getFullYear() /4 == 0 
                         && date.getFullYear()/100 != 0 
                         && date.getFullYear()/400 == 0)
                    {
                         return 29;
                     }else{
                         return 28
                     }
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    return 30
                    break;
            }

        }

        function DateNow(banderaUltimoPrimerDia){
            var date = new  Date()
            var year = date.getFullYear()
            var mes = date.getMonth()+1 <10 ? "0"+date.getMonth()+1 : date.getMonth()+1
            var day = banderaUltimoPrimerDia == 0 ? "01" : UltimoDayMes()
            return (year+"/"+mes+"/"+day)
        }

        function DateNameMonth(){
            var date = new  Date()
            var year = date.getFullYear()
            var mes = date.getMonth()+1
            var name_name = ""
            switch(mes)
            {
                case 1:
                    name_name = "Enero "+year
                    break;
                    case 2:
                    name_name = "Febrero "+year
                    break;
                    case 3:
                    name_name = "Marzo "+year
                    break;
                    case 4:
                    name_name = "Abril "+year
                    break;
                    case 5:
                    name_name = "Mayo "+year
                    break;
                    case 6:
                    name_name = "Junio "+year
                    break;
                    case 7:
                    name_name = "Julio "+year
                    break;
                    case 8:
                    name_name = "Agosto "+year
                    break;
                    case 9:
                    name_name = "Septiembre "+year
                    break;
                    case 10:
                    name_name = "Octubre "+year
                    break;
                    case 11:
                    name_name = "Noviembre "+year
                    break;
                    case 12:
                    name_name = "Diciembre "+year
                    break;
            }
            document.getElementById("inverisones-txt").innerText = name_name
            document.getElementById("ganancias-txt").innerText = name_name
        }
        
        function readInversiones()
        {
            var uri = url_base+"/inventario.php?fechaI="+DateNow(0)+"&fechaF="+DateNow(1)
            console.log(uri)
            $.ajax({
                url:uri,
                method:"GET"
            }).done(function(datos)
            {
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                var tot = "$ 0";
                if(json.status == 200)
                {
                    tot = json.datos != null ? "$ "+json.datos : "$ 0"
                }

                document.getElementById("inverisones").innerText = tot

            }).fail(function(error)
            {
                console.log(error)
                alert(error)
            })
        }

        function readSatisfacion()
        {
            var uri = url_base+"/ranking.php"
            console.log(uri)
            $.ajax({
                url:uri,
                method:"GET"
            }).done(function(datos)
            {
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                var tot = "$ 0";
                if(json.status == 200)
                {
                    tot = json.datos != null ? json.datos+"/5" : " 0/5"
                }

                document.getElementById("satisfacion").innerText = tot

            }).fail(function(error)
            {
                console.log(error)
                alert(error)
            })
        }

        function readEmpleadoActivos()
        {
            var uri = url_base+"/empleado.php/activos"
            console.log(uri)
            $.ajax({
                url:uri,
                method:"GET"
            }).done(function(datos)
            {
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                var tot = 0;
                if(json.status == 200)
                {
                    tot = json.datos != null ? json.datos : 0
                }

                document.getElementById("activos").innerText = tot

            }).fail(function(error)
            {
                console.log(error)
                alert(error)
            })
        }

        readInversiones()
        readEmpleadoActivos()
        DateNameMonth()
        readSatisfacion()

    </script>


</body>

</html>