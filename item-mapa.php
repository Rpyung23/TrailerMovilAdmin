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


        <div class="input-group geocoder">
            <input type="text" id="direccion" disabled class="form-control" placeholder="Ingrese el nombre de las calles.">
            <div class="input-group-append">
                <button  class="fa-savebtn btn btn-primary" type="button"><i class="fa fa-save" aria-hidden="true"></i></button>
            </div>
        </div>


        <div class="content-body" id="mapa">

        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="https://virtualcode7.web.app/" target="_blank">Virtualcode7</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <style>
        .td-codigo {
            color: black;
        }
        
        .img-table {
            height: 50px;
            width: 50px;
        }
    </style>


    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiTYiL8A_yGvPsgRagMcfmp_QcxTPzR-E&callback=initMap&v=weekly" async></script>

    <style>
        #mapa {
            height: 100vh;
            width: 100vw;
        }

        .fa-save{
            font-size: 1.5rem;
        }
    </style>
    
    <script>
        let map;
        let marker;

        function initMap() 
        {

            
            const uluru = { lat:  4.7069718, lng:-74.076544};

            map = new google.maps.Map(document.getElementById("mapa"), {
                center: uluru,
                zoom: 17,
            });
            
            marker = new google.maps.Marker({
                position: uluru,
                draggable:true,
                icon:"https://img.icons8.com/external-konkapp-flat-konkapp/50/000000/external-cafe-cafe-konkapp-flat-konkapp-1.png",
                map: map,
            });

            google.maps.event.addListener(marker, 'dragend', function() 
            {
                //geocodePosition(marker.getPosition());
                console.log(marker.position.lat())
                
                var LatLng = {lat:parseFloat(marker.position.lat()),lng:parseFloat(marker.position.lng())}
                geocodePosition(LatLng)
            });

        }



            function geocodePosition(pos) 
            {
                geocoder = new google.maps.Geocoder();
                geocoder.geocode({latLng: pos}, 
                function(results, status) 
                {
                    if (status == google.maps.GeocoderStatus.OK) 
                    {
                        $("#direccion").val(results[0].formatted_address);
                    } 
                    else 
                    {
                        alert('Cannot determine address at this location.'+status);
                    }
                });
            }

       
       
            $(document).on("click", ".fa-savebtn", function() 
        {
            var obj = {
                id_ubicacion:1,
                latitud:marker.getPosition().lat(),
                longitud:marker.getPosition().lng(),
                geocoder:$("#direccion").val()
            }
            swal({
                title: "Desea actualizar su ubicación ?",
                text: $("#direccion").val(),
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#7571f9",
                confirmButtonText: "Actualizar",
                closeOnConfirm: !1
            }, function() 
            {
                updatePositionBD(obj)
            })
        })
        
        function readPositionBD()
        {
            $.ajax({
                url:"http://localhost/TrailerMovilApiRest/view/mapa.php",
                method:"GET"
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                var template = ""
                if(json.status == 200)
                {
                    var geo = json.datos[0].geocoder
                    marker.setPosition(new google.maps.LatLng(json.datos[0].latitud,json.datos[0].longitud))
                    document.getElementById("direccion").value = geo
                    map.setCenter(marker.getPosition())
                }
            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }
         readPositionBD()

         function updatePositionBD(datos)
        {
            $.ajax({
                url:"http://localhost/TrailerMovilApiRest/view/mapa.php",
                method:"PUT",
                data:JSON.stringify(datos)
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
            
                if(json.status == 200)
                {
                    readPositionBD()
                    swal("Posición actualizada !!", "¡¡Oye, tu ubicaión ha sido actualizada con exito !!", "success")
                }
            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }
    </script>

    <style>
        .geocoder {
            position: absolute !important;
            z-index: 99999999999999999999999999999999;
            margin-top: 10px;
            margin-right: 10px;
            right: 0;
        }
        
        .input-group {
            width: 50%;
        }
    </style>
</body>

</html>