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


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <!-- row -->

            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4 class="card-title">Vertical Form</h4>-->
                                <div class="basic-form">
                                    <div>
                                        <div class="form-row">

                                            <div class="form-group-sin-bottom col-md-2">
                                                <label>Tipo Factura</label><br>
                                                <label class="radio-inline mr-3">
                                                    <input type="radio" checked onchange="selectionRadioTipoFactura(this)" name="optradio" value="1"> Con Datos(Personal)</label>
                                                <label class="radio-inline mr-3">
                                                        <input type="radio" onchange="selectionRadioTipoFactura(this)" name="optradio" value="0"> Consumidor Final</label>

                                            </div>


                                            <div class="form-group-sin-bottom col-md-4">
                                                <label>Dni/Ruc</label>
                                                <input type="text"  id="inputDNiFactura"  class="form-control" placeholder="#### #### ### ###">
                                            </div>

                                            <div class="form-group-sin-bottom col-md-6">
                                                <label>Nombres Completos</label>
                                                <input type="text"  id="inputNamesFactura" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Dirección</label>
                                                <input type="text" id="inputDireccionFactura" class="form-control" placeholder="Calle 13 y Diagonal">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Acciones</label><br>


                                                <div class="containerButton">
                                                   <div class="containerButtonItem">
                                                   <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Producto</button>
                                                <button type="submit" class="btn btn-danger" id="cancelarFactura">Cancelar</button>
                                                <button type="submit" class="btn btn-primary" id="guardarFacturaNueva">Guardar</button>
                                                   </div>
                                                <h2><strong style="color:green;" id="oTotalFactura">0.00</strong></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-xs mb-0">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Nombre Producto</th>
                                                <th>Cantidad</th>
                                                <th>Precio U.</th>
                                                <th>Precio T.</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="oTBodyProductosMenuFactura">
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


        <!-- Large modal -->

        <div class="modal fade bd-example-modal-lg modal-contentMenu" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar Producto</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group-sin-bottom">
                            <select class="form-control" id="oSelectTipoMenuFactura">
                            </select>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-xs mb-0 zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre Producto</th>
                                        <th>Precio U.</th>
                                        <th>Cant</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="oTBodyProductosMenu">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--<div class="modal-footer">
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                    </div>-->
                </div>
            </div>
        </div>



        <!-- Small modal -->
        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Costillitas BBQ.</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-add-producto">
                            <img src="https://d1uz88p17r663j.cloudfront.net/resized/15696b61f2de4f3b4fb6a5516ffcd6ab_COSTILLAS_BBQ_1200_600.jpg" class="img-table-add rounded-circle" alt="">
                            <div>
                                <button type="button" class="btn btn-danger">-</button>
                                <label class="td-codigo"><strong> <h4> 1 </h4> </strong></label>
                                <button type="button" class="btn btn-primary">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Añadir</button>
                    </div>
                </div>
            </div>
        </div>


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


    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <!--<script src="./plugins/sweetalert/js/sweetalert.init.js"></script>-->


    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <script>
        let oTotalFacturaNew = 0
        const dominioRoman = "http://localhost"

        var dniInputFactura = document.getElementById("inputDNiFactura")
        var namesInput = document.getElementById("inputNamesFactura")
        var dirInput = document.getElementById("inputDireccionFactura")

        $(document).on("click", ".sweet-confirm", function() 
        {
            var item = parseInt($(this)[0].attributes[0].value)

            console.log(item)

            var obj = {
                empleado:"<?php echo $_SESSION['user'];?>",
                dni: dniInputFactura.value,
                producto: item
            }

            $.ajax({
                url:dominioRoman+"/TrailerMovilApiRest/view/cliente_menu_tem.php/menuTempEmpleado",
                method:"DELETE",
                data:JSON.stringify(obj)  
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 300)
                {
                    swal("Error", "¡¡ No se pudo eliminar el producto. !!", "warning")
                }else{
                    if(json.datos != true)
                    {
                        swal("Error", "¡¡ No se pudo eliminar el producto. !!", "warning")
                    }
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        })


        function selectionRadioTipoFactura(item)
        {

            dniInputFactura.value = ''
            namesInput.value = ''
            dirInput.value = ''

            if(item.value == 0)
            {
                dniInputFactura.disabled = true
                dniInputFactura.value = '9999999999999'
                namesInput.disabled = true
                dirInput.disabled = true
                consumirClienteFactura('9999999999999')
            }else if(item.value == 1){
                dniInputFactura.disabled = false
                namesInput.disabled = false
                dirInput.disabled = false
            }
        }

        $(document).on("keypress","#inputDNiFactura",function (event)
        {
            if(event.key == "Enter")
            {
                //alert("keyPress")
                consumirClienteFactura(dniInputFactura.value)
            }
        })

        function consumirClienteFactura(dni){
            $.ajax({
                url:dominioRoman+"/TrailerMovilApiRest/view/clienteFactura.php?dni="+dni,
                method:"GET"
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 300)
                {
                    swal("Cliente "+dni, "¡¡ No se encuentra registrado. !!", "warning")
                }else{
                    var datos = json.datos
                    dniInput = datos.dni
                    namesInput.value = datos.names
                    dirInput.value = datos.direccion
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        
        function consumirTiposMenuFactura(){
            $.ajax({
                url:dominioRoman+"/TrailerMovilApiRest/view/tipomenu.php",
                method:"GET"
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    var elementos = ""
                    for(var i = 0;i<json.datos.length;i++)
                    {
                        elementos += `<option value="${json.datos[i].id_tipo_menu}">${json.datos[i].detalle}</option>`
                    }
                    
                    document.getElementById("oSelectTipoMenuFactura").innerHTML = elementos

                    if(json.datos.length > 0){
                        consumirMenuFactura(json.datos[0].id_tipo_menu)
                    }
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        function consumirMenuFactura(tipo){
            $.ajax({
                url:dominioRoman+"/TrailerMovilApiRest/view/menu.php/unico?id_menu="+tipo,
                method:"GET"
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    var elementos = ""
                    for(var i = 0;i<json.datos.length;i++)
                    {
                        elementos += `<tr>
                                        <td oItem ="${json.datos[i].id_menu}" class="td-codigo"><strong>${json.datos[i].id_menu}</strong></td>
                                        <td><img src="${json.datos[i].foto_menu}" class="img-table rounded-circle mr-3" alt="">${json.datos[i].detalle}</td>
                                        <td class="td-codigo"><strong>${json.datos[i].precio} $</strong> </td>
                                        <td>
                                            <div>
                                              <button type="button" class="oDisminuirProduto btn btn-danger btn-sm"><strong>-</strong></button>
                                                   <label class="td-codigo"><strong> <h4> 0 </h4> </strong></label>
                                              <button type="button" class="oAumentarProduto btn btn-primary btn-sm"><strong>+</strong></button>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="insertItemFactura btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" ><i class="fa fa-edit m-r-5"></i> Añadir</button>
                                        </td>
                                    </tr>`
                    }
                    
                    document.getElementById("oTBodyProductosMenu").innerHTML = elementos
                    
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        function consumirItemMenuFactura(item,cantidad){
            $.ajax({
                url:dominioRoman+"/TrailerMovilApiRest/view/menu.php/unicoItem?item="+item,
                method:"GET"
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    var elementos = document.getElementById("oTBodyProductosMenuFactura").innerHTML
                    elementos += `<tr>
                                    <td class="td-codigo"><strong>${json.datos.id_menu}</strong></td>
                                                <td><img src="${json.datos.foto_menu}" class="img-table rounded-circle mr-3" alt="">${json.datos.detalle}</td>
                                                <td>${cantidad}</td>
                                                <td>
                                                     ${json.datos.precio} $
                                                </td>
                                                <td class="td-codigo"><strong>${Number(parseFloat(json.datos.precio) * cantidad).toFixed(2)} $</strong> </td>
                                                <td>
                                                    <button producto="${json.datos.id_menu}" class="btn btn-danger m-b-30 btn sweet-confirm" type="button">Eliminar</button>
                                                </td>
                                    </tr>`
                    document.getElementById("oTBodyProductosMenuFactura").innerHTML = elementos


                    var total = document.getElementById("oTotalFactura").innerText

                    var sum = parseFloat(total) + (parseFloat(json.datos.precio) * cantidad)

                    oTotalFacturaNew = sum

                    document.getElementById("oTotalFactura").innerText = oTotalFacturaNew.toFixed(2)
                    
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        function registerItemMenuTemFactura(item,cantidad,cliente_,empleado_){
            var obj = {
                  menu:item,
                  cantidad:cantidad,
                  empleado:empleado_,
                  cliente:cliente_
                }
                console.log("****************************************")
                console.log(obj)

            $.ajax({
                url:dominioRoman+"/TrailerMovilApiRest/view/cliente_menu_tem.php/menuTempEmpleado",
                method:"POST",
                data:JSON.stringify(obj)                
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200 && json.datos == true)
                {
                    consumirItemMenuFactura(item,cantidad)
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }


        $(document).on('click','#guardarFacturaNueva',function(){

            registerNuevaFactura(dniInputFactura.value,"<?php echo $_SESSION['user'];?>")
        })

        function registerNuevaFactura(cliente_,empleado_){
            var obj = {
                  empleado:empleado_,
                  cliente:cliente_
                }
                console.log("****************************************")
                console.log(obj)

            $.ajax({
                url:dominioRoman+"/TrailerMovilApiRest/view/compras.php",
                method:"POST",
                data:JSON.stringify(obj)                
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200 && json.datos != "0")
                {
                    swal({
                      title: "Factura Guarda con éxito",
                      text: "Porfavor no olvide guardar el ticket de pago. ("+json.datos+")",
                      type: "success",
                      showCancelButton: 1,
                      confirmButtonColor: "#7571f9",
                      cancelButtonColor: "#26B410",
                      confirmButtonText: "Listo",
                      cancelButtonText: "Imprimir Factura",
                      closeOnConfirm: 1
                    }, function() {
                        window.location.reload()
                    })
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        $('#oSelectTipoMenuFactura').on('change', function() 
        {
           consumirMenuFactura(this.value)
        });

        $(document).on("click", ".oAumentarProduto", function()
        {
            var nowNumber = parseInt($(this)[0].offsetParent.children[0].children[1].innerText)
            if(nowNumber >= 0)
            {
                nowNumber = nowNumber + 1

                $(this)[0].offsetParent.children[0].children[1].innerHTML = `<strong> <h4> ${nowNumber} </h4> </strong>`
            }
        })

        $(document).on("click", ".oDisminuirProduto", function()
        {
            var nowNumber = parseInt($(this)[0].offsetParent.children[0].children[1].innerText)
            if(nowNumber > 0)
            {
                nowNumber = nowNumber - 1

                $(this)[0].offsetParent.children[0].children[1].innerHTML = `<strong> <h4> ${nowNumber} </h4> </strong>`
            }
        })

        $(document).on('click','.insertItemFactura',function(){
            var elementos = $(this)[0].parentElement.parentElement.children[0].attributes[0].value
            var cantidad = $(this)[0].parentElement.parentElement.children[3].children[0].children[1].children[0].children[0].innerText
            if(parseInt(cantidad) > 0)
            {
                registerItemMenuTemFactura(elementos,parseInt(cantidad),dniInputFactura.value,"<?php echo $_SESSION['user'];?>")
                
            }
        })


        consumirTiposMenuFactura()

        $(document).on('click','#cancelarFactura',function(){
            if(oTotalFacturaNew > 0){
                window.location.reload()
            }
        })

    </script>


    <style>
        .containerButton{
            display:flex;
            width: 100%;
            justify-content: space-between;
        }

       .modal-content{
            max-height: calc(100vh - 5rem) !important;
            overflow:hidden;
        }
       .modal-body{
            overflow: auto;
        }
        .img-table-add {
            height: 125px;
            width: 125px;
        }
        
        .modal-add-producto {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .modal-add-producto div {
            margin-top: 1rem;
        }
        
        .form-group-sin-bottom {
            margin-bottom: 0rem !important;
        }
    </style>
</body>

</html>