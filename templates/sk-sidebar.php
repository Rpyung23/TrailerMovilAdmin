<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--**********************************
    Sidebar start
***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="home.php">Home</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-money" aria-hidden="true"></i><span class="nav-text">Facturación</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="item-new-factura.php">Nueva Factura</a></li>
                    <li><a href="item-detalle-facturacion.php">Detalles Facturas</a></li>
                    <!--<li><a href="./layout-two-column.html">Two column</a></li>
                    <li><a href="./layout-compact-nav.html">Compact Nav</a></li>
                    <li><a href="./layout-vertical.html">Vertical</a></li>
                    <li><a href="./layout-horizontal.html">Horizontal</a></li>
                    <li><a href="./layout-boxed.html">Boxed</a></li>
                    <li><a href="./layout-wide.html">Wide</a></li>


                    <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                    <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>-->
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-braille" aria-hidden="true"></i><span class="nav-text">Reservaciónes</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Nueva Reservar</a></li>
                    <li><a href="item-detalle-reserva.php">Detalles Reserva</a></li>
                    <!--<li><a href="./layout-two-column.html">Two column</a></li>
                    <li><a href="./layout-compact-nav.html">Compact Nav</a></li>
                    <li><a href="./layout-vertical.html">Vertical</a></li>
                    <li><a href="./layout-horizontal.html">Horizontal</a></li>
                    <li><a href="./layout-boxed.html">Boxed</a></li>
                    <li><a href="./layout-wide.html">Wide</a></li>


                    <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                    <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>-->
                </ul>
            </li>
            <!--<li class="nav-label">Apps</li>-->

            <?php
            if($_SESSION['id_rol'] == 1)
            {
            ?>
            <li>
                <a class="has-arrow" href="item-menu.php" aria-expanded="false">
                    <i class="fa fa-list" aria-hidden="true"></i> <span class="nav-text">Menú</span>
                </a>
                <!--<ul aria-expanded="false">
                    <li><a href="./email-inbox.html">Registro Menú</a></li>
                    <li><a href="./email-read.html">Detalle Menú</a></li>
                </ul>-->
            </li>
            <li>
                <a class="has-arrow" href="item-evento.php" aria-expanded="false">
                    <i class="fa fa-music" aria-hidden="true"></i> <span class="nav-text">Eventos</span>
                </a>
                <!--<ul aria-expanded="false">
                    <li><a href="./email-inbox.html">Registro Menú</a></li>
                    <li><a href="./email-read.html">Detalle Menú</a></li>
                </ul>-->
            </li>
            <li>
                <a class="has-arrow" href="./item-inventario.php" aria-expanded="false">
                    <i class="fa fa-dropbox" aria-hidden="true"></i><span class="nav-text">Inventario</span>
                </a>
                <!--<ul aria-expanded="false">
                    <li><a href="./email-inbox.html">Registro Producto</a></li>
                    <li><a href="./email-read.html">Detalle P</a></li>
                    <li><a href="./email-compose.html">Compose</a></li>
                </ul>-->
            </li>
            <li>
                <a class="has-arrow" href="item-empleados.php" aria-expanded="false">
                    <i class="fa fa-user-o" aria-hidden="true"></i><span class="nav-text">Empleados</span>
                </a>
                <!--<ul aria-expanded="false">
                    <li><a href="./app-profile.html">Profile</a></li>
                    <li><a href="./app-calender.html">Calender</a></li>
                </ul>-->
            </li>
            <li>
                <a class="has-arrow" href="item-mapa.php" aria-expanded="false">
                    <i class="icon-graph menu-icon"></i> <span class="nav-text">Google Maps</span>
                </a>
                <!--<ul aria-expanded="false">
                    <li><a href="./chart-flot.html">Flot</a></li>
                    <li><a href="./chart-morris.html">Morris</a></li>
                    <li><a href="./chart-chartjs.html">Chartjs</a></li>
                    <li><a href="./chart-chartist.html">Chartist</a></li>
                    <li><a href="./chart-sparkline.html">Sparkline</a></li>
                    <li><a href="./chart-peity.html">Peity</a></li>
                </ul>-->
            </li>
            <!--<li class="nav-label">UI Components</li>-->
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="nav-text">Reportes</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Ganancias</a></li>
                    <li><a href="#">Inversiones</a></li>
                    <li><a href="#">Empleados</a></li>
                    <!--<li><a href="./ui-button-group.html">Button Group</a></li>
                    <li><a href="./ui-cards.html">Cards</a></li>
                    <li><a href="./ui-carousel.html">Carousel</a></li>
                    <li><a href="./ui-dropdown.html">Dropdown</a></li>
                    <li><a href="./ui-list-group.html">List Group</a></li>
                    <li><a href="./ui-media-object.html">Media Object</a></li>
                    <li><a href="./ui-modal.html">Modal</a></li>
                    <li><a href="./ui-pagination.html">Pagination</a></li>
                    <li><a href="./ui-popover.html">Popover</a></li>
                    <li><a href="./ui-progressbar.html">Progressbar</a></li>
                    <li><a href="./ui-tab.html">Tab</a></li>
                    <li><a href="./ui-typography.html">Typography</a></li>-->
                </ul>
            </li>
            <!--<li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./uc-nestedable.html">Nestedable</a></li>
                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="./uc-toastr.html">Toastr</a></li>
                </ul>
            </li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                </a>
            </li>
            <li class="nav-label">Forms</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./form-basic.html">Basic Form</a></li>
                    <li><a href="./form-validation.html">Form Validation</a></li>
                    <li><a href="./form-step.html">Step Form</a></li>
                    <li><a href="./form-editor.html">Editor</a></li>
                    <li><a href="./form-picker.html">Picker</a></li>
                </ul>
            </li>
            <li class="nav-label">Table</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                    <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                </ul>
            </li>
            <li class="nav-label">Pages</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-lock.html">Lock Screen</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                </ul>
            </li>-->
            <?php
            }
            ?>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
</body>
</html>
