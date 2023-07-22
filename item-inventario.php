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

                    <div class="col-12">

                        <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10 float-right"
                                type="button" data-toggle="modal" data-target="#idmodalRegister"><i class="fa fa-plus m-r-5"></i> Agregar Producto</button>

                        <br><br><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-xs mb-0 zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Nombre Producto</th>
                                                <th>Stock</th>
                                                <th>Estado</th>
                                                <th>Precio U.</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_inventario">
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

    <div class="modal fade bd-example-modal-lg" id="idmodalRegister" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de Producto</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                </div>
                <div class="modal-body">

                    <div class="col-lg-12">
                        <div class="basic-form">
                            <div class="container-foto-add-menu">
                                <img id="imagenPrevisualizacion" src="https://e7.pngegg.com/pngimages/637/822/png-clipart-font-awesome-upload-computer-icons-font-computers-blue-text.png" class="img-add-menu mr-3">
                                <form>
                                    <div class="form-group">
                                        <input type="file" id="seleccionArchivos" 
                                            class="form-control-file" accept="image/*">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Descripción</label>
                                    <input type="text" id="input1" class="form-control" placeholder="Descripción">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Precio Compra</label>
                                    <input type="text" id="input2"  min="0" class="form-control" placeholder="Precio Compra<">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Stock</label>
                                    <input type="number" min="1" id="input3"  class="form-control" placeholder="Stock">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Referencia Proveedor</label>
                                    <input type="text" id="input4" class="form-control" placeholder="Referencia Proveedor">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="basic-form">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btn_save_producto" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>


    <!-- UPDATE Large modal -->

    <div class="modal fade bd-edit-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Información de Producto</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-lg-12">
                        <div class="basic-form">
                            <div class="container-foto-add-menu">
                                <img src="/images/profile/profile.png" class="img-add-menu mr-3">
                                <form>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Descripción</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Precio Compra</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Stock</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Referencia Proveedor</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="basic-form">

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
    <script src="js/selected_foto.js"></script>
    <!--<script src="./plugins/sweetalert/js/sweetalert.init.js"></script>-->

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>


    <script>
        $(document).on("click", ".sweelt-confirm", function() {
            swal({
                title: "Desea eliminar este item?",
                text: "No podrás recuperar este archivo imaginario !!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Eliminar",
                closeOnConfirm: !1
            }, function() {
                
            })
        })

        $(document).on("click","#btn_save_producto",function()
        {
            insertInvenatrioPhoto()
        })

        function readInvenatrioAll(){
            $.ajax({
                url:"http://localhost/TrailerMovilApiRest/view/inventario.php",
                method:"GET"
            })
            .done(function(datos){
                var strintify = JSON.stringify(datos)
                var json = JSON.parse(strintify)
                var template = ""

                if(json.status == 200)
                {
                    for(var i=0;i<json.datos.length;i++)
                    {
                        var span = ""
                        if(json.datos[i].stock <= 5){
                            span = '<i class="fa fa-circle-o text-danger  mr-2"></i> <span class="badge badge-danger badge-sm m-t-5">Casi Agotado</span>'
                        }else{
                            span = '<i class="fa fa-circle-o text-primary  mr-2"></i><span class="badge badge-primary badge-sm m-t-5">Estable</span>'
                        }

                        template+= `<tr>
                                                <td class="td-codigo"><strong>${json.datos[i].id_producto}</strong></td>
                                                <td><img src="${json.datos[i].foto_producto}" class="img-table rounded-circle mr-3"
                                                        alt="">${json.datos[i].detalle}</td>
                                                <td class="td-codigo"><strong>${json.datos[i].stock}</strong></td>
                                                <td>
                                                    ${span}
                                                </td>
                                                <td class="td-codigo"><strong>${json.datos[i].precio_compra} $</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fa fa-edit m-r-5"></i></button>
                                                    <button class="btn btn-danger m-b-30 sweet-confirm" type="button"><i class="fa fa-trash m-r-5"></i></button>
                                                </td>
                                            </tr>`
                    }
                    document.getElementById("tbody_inventario").innerHTML = template
                }


            }).fail(function(error)
            {
                console.log(error)
                alert("ERROR API INVENTARIO")
            })
        }

        function insertInvenatrioPhoto()
        {
            var formData = new FormData();
            var files = $('#seleccionArchivos')[0].files[0];    
            
            formData.append('file',files);

            $.ajax({
                url:"http://localhost/TrailerMovilApiRest/view/upload.php",
                method:"POST",
                data: formData,
                contentType: false,
                processData: false,
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    
                    //readEventosAll()
                    var user = "<?php echo $_SESSION['user'];?>";
                    var url = json.url.replace("../","")
            var obj = {
                detalle:document.getElementById("input1").value,
                stock:document.getElementById("input3").value,
                precio_compra:document.getElementById("input2").value, 
                fk_id_empleado:user, 
                detalle_proveedor:document.getElementById("input4").value, 
                foto_producto:"https://roman-company.com/TrailerMovilApiRest/"+url
            }
            


                    insertInvenatrioAll(obj)
                }else{
                    swal("Foto no Guardado !!", "¡¡Oye, tu archivo no ha sido guardado !!", "warning")
                }

            }).fail(function(error){
                console.log(error.responseText)
                alert("ERROR API REST")
            })

        }

        function insertInvenatrioAll(datos)
        {
            $.ajax({
                url:"http://localhost/TrailerMovilApiRest/view/inventario.php",
                method:"POST",
                data:JSON.stringify(datos)
            })
            .done(function(datos){
                var strintify = JSON.stringify(datos)
                var json = JSON.parse(strintify)

                if(json.status == 200)
                {
                    $('#idmodalRegister').removeClass('modal-open')
                    $('#idmodalRegister').modal('hide')
                    readInvenatrioAll()
                    swal("Producto registrado !!", "¡¡Oye, tu archivo ha sido registrado con exito !!", "success")
                }

            }).fail(function(error)
            {
                console.log(error)
                alert("ERROR API INVENTARIO")
            })
        }

        readInvenatrioAll()
    </script>


</body>

</html>
