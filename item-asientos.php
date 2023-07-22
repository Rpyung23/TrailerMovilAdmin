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
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">

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

        <div class="row d-flex justify-content-end" style="margin-top : 1.5rem;">

        <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10 float-right" type="button" 
                        data-toggle="modal" data-target="#basicModal"><i class="fa fa-plus m-r-5"></i> ASIENTOS</button>

          </div>

                        

            <!-- row -->
            <br>
            <div class="row d-flex justify-content-center" id="contenedor-asientos">

            </div>

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
    <script src="js/selected_foto.js"></script>

    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <!--<script src="./plugins/sweetalert/js/sweetalert.init.js"></script>-->


    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>






    <script>

function generarAsientos(numAsientos) {
    const $contenedorAsientos = document.getElementById('contenedor-asientos');
    const fragment = document.createDocumentFragment();

    $contenedorAsientos.innerHTML = '';

    $.ajax({
        url:"http://localhost/TrailerMovilApirest/view/asientos.php",
        method:"GET",
    }).done(function(datos)
    {
        console.log( datos.datos)
        //var datos = JSON.stringify(datos)

        for (let i = 0; i < datos.datos.length; i++) 
        {
        let label = document.createElement('LABEL');
        let id = datos.datos[i].codeAsiento
        label.classList.add('asiento','col-1','m-2');
        label.setAttribute('for', id);

        label.innerHTML = `
            <input type="checkbox" name="asientos" id="${id}" class="check">
            <img src="./images/chair.svg" class="img-chair">
            <span></span>
            <p>${id}</p>
        `
        fragment.appendChild(label);
    }

    $contenedorAsientos.appendChild(fragment);

    }).fail(function(error){
        console.log(error)
    })





}

        $('#min-date').bootstrapMaterialDatePicker({
        format: 'YYYY/MM/DD HH:mm',
        minDate: new Date()
    });

    $('#min-date-update').bootstrapMaterialDatePicker({
        format: 'YYYY/MM/DD HH:mm',
        minDate: new Date()
    });


    generarAsientos(70)
    </script>


</body>

<style>

    .modal-footer {
        display: flex;
        flex-wrap: wrap;
        flex-shrink: 0;
        align-items: center;
        justify-content: flex-end;
        padding: 0.75rem;
        /* border-top: 1px solid #dee2e6; */
        /* border-bottom-right-radius: calc(0.3rem - 1px); */
        /* border-bottom-left-radius: calc(0.3rem - 1px); */
    }

    .containerReservasAsiento{
        height: auto;
        width: 100vw;
        background-color: white;
    }
    .modal-dialog{
        margin: 0px auto !important;
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: white;
        background-clip: padding-box;
        border: 0px solid rgba(0,0,0,0);
        border-bottom: 0px;
        border-radius: 0rem;
        outline: 0;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        /* padding: 1rem; */
    }

/* -------------------------------------------------------------------------- */
/*                              estilos asientos                              */
/* -------------------------------------------------------------------------- */
.asiento {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 55px;
  width: 55px;
  background-color: #363e46;
  font-size: 16px;
  user-select: none;
  border-radius: 5px;
  cursor: pointer;
}
.img-chair {
  width: 15px;
  margin-top: 2px;
  margin-bottom: 2px;
}

.asiento p {
  margin: 0;
  padding: 0;
  color: #fff;
  font-family: var(--frale);
  font-size: 13px;
}
.asiento span {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: inherit;
  border-radius: 5px;
  border: 2px solid #363e46;
  /* box-shadow: 0 0 3px #363e46; */
}

.asiento.reserved {
  cursor: not-allowed;
}

.asiento.reserved span {
  border: 2px solid #dc3545;
  box-shadow: 0 0 3px #dc3545;
}

.check {
  display: none;
}

.check:checked~span {
  border: 2px solid #007bff;
  box-shadow: 0 0 3px #007bff;
}


</style>

</html>
