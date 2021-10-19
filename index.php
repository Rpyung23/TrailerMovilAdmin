<?php

if(file_exists('session/session.php'))
{
    include 'session/session.php';
}else{
    include '../session/session.php';
}

?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trailer Movil Events</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div action="" class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html">
                                    <h2>Trailer<sub><label>Movil Events</label></sub></h2>
                                </a>

                                <div class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="text" id="user" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="pass" class="form-control" placeholder="Password">
                                    </div>
                                    <button id="btn_login" class="btn login-form__btn submit w-100">Ingresar</button>
                                </div>
                                <p class="mt-5 login-form__footer">En caso de problemas <a href="https://virtualcode7.web.app/" class="text-primary">Contactenos</a> ahora</p>
                            </div>
                        </div>
                    </div>
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
    <script src="js/jquery.js"></script>

    <script>
        var btn_login = document.getElementById("btn_login")
        var user  = document.getElementById("user");
        var pass = document.getElementById("pass");
        btn_login.addEventListener("click", function(e) 
        {
            var obj = {
                codigo:"empleado",
                user:user.value,
                pass:pass.value
            }
            
            $.ajax({
                url:"https://roman-company.com/TrailerMovilApiRest/view/login.php",
                method :'POST',
                data:JSON.stringify(obj) 
  
            })
            .done(function(datos)
            {
                var datos = JSON.stringify(datos)
                var json = JSON.parse(datos)
                if(json.status == 200)
                {
                    _session(json.datos)
                }else{
                    alert("Usuario no encontrado.")
                }
            }).fail(function(error){
                console.log(error)
                alert("Error Api Rest")
            })
            
        })


        function _session(obj)
        {
            $.ajax({
                url:"./rest/session.php",
                method :'POST',
                data:JSON.stringify(obj)
            }).done(function(datos)
                {
                    console.log(datos)
                    var datos_ = JSON.stringify(datos)
                    var json = JSON.parse(datos_)
                    if(json.status == 200)
                    {
                        location.href = "./home.php"
                    }else{
                        alert("Error API Session")
                    }
                }).fail(function(error)
            {
                console.log(error)
                alert("Error Api SESSION")
            })
        }

    </script>



</body>

</html>