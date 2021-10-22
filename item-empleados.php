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

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">

                        <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10 float-right" type="button" data-toggle="modal" data-target="#basicModal"><i class="fa fa-plus m-r-5"></i> Agregar Empleado</button>
                        <br><br><br>
                        <div class="card">
                            <div class="card-body">

                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0 zero-configuration">
                                            <thead>
                                            <tr>
                                                <th>Nombre Empleado</th>
                                                <th>User</th>
                                                <th>Password</th>
                                                <th>Telefono</th>
                                                <th>Estado</th>
                                                <th>Rol</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody id="body_empleados">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--

     MODAL REGISTER START
-->

        <!-- Modal -->
        <div class="modal fade" id="basicModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registro de Empleados</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-input-content">
                            <div class="login-form">
                                <div class="card-body">
                                    <form class="login-input">
                                        <div class="form-group">
                                            <input type="text" id="register-names" class="form-control" placeholder="Nombres Completos" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" id="resgister-tel" class="form-control" placeholder="Telefono" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="register-user" class="form-control" placeholder="Usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="register-pass" class="form-control" placeholder="Password" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Seleccione su Rol</label>
                                            <select class="form-control" id="sel1">
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="btn_register">Registrar Empleado</button>
                        <!--<button class="btn login-form__btn submit w-100">Sign in</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!--

             MODAL REGISTER END
        -->




        <!--

             MODAL EDITAR START
        -->

        <!-- Modal -->
        <div class="modal fade" id="basicModalEditar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Información Empleado</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-input-content">
                            <div class="login-form">
                                <div class="card-body">
                                    <form class="login-input">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombres Completos" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Telefono" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Seleccione su Rol</label>
                                            <select class="form-control" id="sel1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                        <!--<button class="btn login-form__btn submit w-100">Sign in</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!--

             MODAL EDITAR END
        -->


        <?php
        include 'templates/footer.php'
        ?>


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
    <script src="js/styleSwitcher.js"></script>


    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <!--<script src="./plugins/sweetalert/js/sweetalert.init.js"></script>-->


    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>




    <script>
        let user_delete = ""

        function readEmpleados()
        {
            $.ajax({
                url:"https://roman-company.com/TrailerMovilApiRest/view/empleado.php",
                method:'GET'
            }).done(function (datos)
            {
                var template = "";
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if (json.status == 200)
                {
                    for (var i = 0;i<json.datos.length;i++)
                    {
                        var span =  ""
                        if(json.datos[i].estado == 0){
                            span = '<i class="fa fa-circle-o text-danger  mr-2"></i> <span class="badge badge-danger badge-sm m-t-5">Inactivo</span>'
                        }else
                        {
                            span = '<i class="fa fa-circle-o text-primary  mr-2"></i> <span class="badge badge-primary badge-sm m-t-5">Activo</span>'
                        }
                        template += `<tr>
                                                <td>${json.datos[i].nombres.slice(0,22)}</td>
                                                <td class="td-codigo"><strong>${json.datos[i].user}</strong></td>
                                                <td>${json.datos[i].password}</td>
                                                <td>${json.datos[i].telefono}</td>
                                                <td>
                                                    ${span}
                                                </td>
                                                <td class="td-codigo" rol="${json.datos[i].id_rol}"><strong>${json.datos[i].detalle}</strong></td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button" data-toggle="modal" data-target="#basicModalEditar"><i class="fa fa-edit m-r-5"></i></button>
                                                    <button class="btn-delete-empleado btn btn-danger m-b-30 sweet-confirm" user = "${json.datos[i].user}" type="button"><i class="fa fa-trash m-r-5"></i></button>
                                                </td>
                                            </tr>`
                    }

                    document.getElementById("body_empleados").innerHTML = template
                }

            }).fail(function (error)
            {
                console.log(error)
            })
        }

        readEmpleados()

        function insertEmpleado()
        {
            var names = document.getElementById("register-names")
            var tel = document.getElementById("resgister-tel")
            var user = document.getElementById("register-user")
            var pass = document.getElementById("register-pass")

            var select_rol = document.getElementById("sel1");
            var rol = select_rol.options[select_rol.selectedIndex].value;


            var obj = {
                user:user.value,
                pass:pass.value,
                names:names.value,
                telefono:tel.value,
                rol:rol
            }

            $.ajax({
                url:"https://roman-company.com/TrailerMovilApiRest/view/empleado.php",
                method:'POST',
                data:JSON.stringify(obj)
            }).done(function (datos)
            {
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if (json.status == 200 && json.datos == true)
                {
                    readEmpleados()
                    $('#basicModal').removeClass('modal-open')
                    $('#basicModal').modal('hide')
                }else{
                    alert("EMPLEADO NO REGISTRADO")
                }

            }).fail(function (error)
            {
                console.log(error)
            })
        }

        function readRol()
        {
            $.ajax({
                url:"https://roman-company.com/TrailerMovilApiRest/view/rol.php",
                method:'GET'
            }).done(function (datos)
            {
                var template = "";
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if (json.status == 200)
                {
                    var template = ""
                    for (var i = 0;i<json.datos.length;i++)
                    {
                        template+=`<option value="${json.datos[i].id_rol}">${json.datos[i].detalle}</option>`
                    }

                    document.getElementById("sel1").innerHTML = template
                }

            }).fail(function (error)
            {
                console.log(error)
            })
        }

        readRol()

        $(document).on("click","#btn_register",function (e)
        {
            insertEmpleado()
        })

        $(document).on("click",".btn-delete-empleado",function (e)
        {
            var element = $(this)
            user_delete = element[0].attributes[1].value

            swal({
                title: "Desea eliminar este empleado "+user_delete+" ?",
                text: "No podrás recuperar este archivo imaginario !!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Eliminar",
                closeOnConfirm: !1
            }, function()
            {
                deleteEmpleado()
            })
        })

        function deleteEmpleado()
        {
            var obj = {
                user:user_delete
            }

            $.ajax({
                url:"https://roman-company.com/TrailerMovilApiRest/view/empleado.php",
                method:'DELETE',
                data:JSON.stringify(obj)
            }).done(function (datos)
            {
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if (json.status == 200 && json.datos == true)
                {
                    readEmpleados()
                    swal("Eliminado !!", "¡¡Oye, tu archivo imaginario ha sido eliminado !!", "success")
                }else{
                    alert("EMPLEADO NO ELIMINADO")
                }

            }).fail(function (error)
            {
                console.log(error)
            })
        }

    </script>

</body>

</html>