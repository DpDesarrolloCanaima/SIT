<?php
require "config/conexionProvi.php";

$id_usuarios = $_SESSION['id_usuarios'];

?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <!-- Dropdown - Messages -->

        <?php

            switch ($rol) { 

                case 3:
                    $observacionesT = 'observaciones_verificador'; 
                    $filenameDetalles = "detalleanalista.php";
                    $notiText = "Entregar, "; 

                break;

                case 4:
                    $observacionesT = 'observaciones_analista';
                    $filenameDetalles = "detalletecnico.php";
                    $notiText = "Reparar, ";
                break;

                case 5:
                    $observacionesT = 'observaciones_tecnico';
                    $filenameDetalles = "detalles.php";
                    $notiText = "Verificar, ";  
                break;

                case 6:
                   
                    $observacionesT = 'observaciones_tecnico, observaciones_analista, observaciones_verificador';
                    $notiText = "Asignar, ";
                    $filenameDetalles = "detalles.php";
                    
                break;
            }
    
            $consultaver = 'SELECT registro, "'.$observacionesT.'", id_datos_del_dispositivo, id_tipo_de_dispositivo, responsable FROM datos_del_dispotivo WHERE responsable = "'.$id_usuarios.'" ORDER BY registro DESC';    
            $resultadover = $mysqli->query($consultaver);

            $numr = $resultadover->num_rows;
    
            echo '
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">'.$numr.'+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        NOTIFICACIONES
                    </h6>';
    
                    setlocale(LC_TIME, 'es_VE');
    
                    while(($verNot = $resultadover->fetch_assoc())) {
                        echo '<a class="dropdown-item d-flex align-items-center" href="' .$filenameDetalles.'?id='.$verNot['id_datos_del_dispositivo'].'">
                        <div class="mr-3">
                            <div class="bg-primary icon-circle">';
                               
                                switch($verNot['id_tipo_de_dispositivo']) {
                                case 1:
                                $icono = "img/canaimalogo2.jpg";
                                break;
                                case 3:
                                $icono = "img/canaimalogo2.jpg";
                                break;
                                case 4:
                                $icono = "img/canaimalogo2.jpg";
                                break;
                                case 5:
                                $icono = "img/canaimalogo2.jpg";
                                break;
                                case 6:
                                $icono = "img/canaimalogo2.jpg";
                                break;
                                case 7:
                                $icono = "img/canaimalogo2.jpg";
                                break;
                                case 8:
                                $icono = "img/canaimalogo2.jpg";
                                break;
                                }
    
    
                                echo '<img class="img-fluid " src="'.$icono.'">
                            </div>
                        </div>
                        <div>';
    
                            $fechafmt = strftime("%d de %B de %Y", strtotime($verNot['registro']));
                            if($rol == 6) {
                                echo '<div class="small text-gray-500">'.$fechafmt.'</div>
                                <span class="font-weight-bold">Nuevo equipo por '.$notiText.' observación:
                                    '.$verNot[$observacionesT].'</span>
                                </div>
                            </a>';
                            }

                            if(!empty($verNot[$observacionesT])){ 
                                echo '<div class="small text-gray-500">'.$fechafmt.'</div>
                                <span class="font-weight-bold">Nuevo equipo por '.$notiText.' observación:
                                    '.$verNot[$observacionesT].'</span>
                            </div>
                            </a>';
                        
                            }else{
                                echo '<div class="small text-gray-500">'.$fechafmt.'</div>
                                <span class="font-weight-bold">Nuevo equipo por '.$notiText.' observación:
                                    Sin observación</span>
                            </div>
                            </a>';
                            }
                        }
    
                        echo '
                </div>
            </li>';
        ?>


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php 
                    switch ($rol) {
                   case 1:
                        echo "Administrador";
                        break;
                    case 2:
                        echo "Presidencia";
                        break;
                    case 3:
                        echo "Analista";
                        break;
                    case 4:
                        echo "Técnico";
                        break;
                    case 5:
                        echo "Verificador";
                        break;
                    case 6:
                        echo "Coordinador de Área";
                        break;
                }

                    ?>

                </span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Salir
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->