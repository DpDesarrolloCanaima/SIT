<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <?php    
	switch($rol){
	case 1:
		echo ' <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">';
	break;
	case 2:
		echo ' <a class="sidebar-brand d-flex align-items-center justify-content-center" href="presidencia.php">';
	break;
    case 6:
		echo ' <a class="sidebar-brand d-flex align-items-center justify-content-center" href="coordinador.php">';
	break;  
} 

?>


    <div class="sidebar-brand-icon rotate-n-15">
        <img src="img/Canaima.png " alt="Industrias Canaima" width="42" height="42">
    </div>
    <div class="sidebar-brand-text mx-3"><?php echo company; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <?php
             // Comprobación de rol de usuario y muestra de enlace de home.
            switch ($rol) {
                case 1:
                    echo '<a class="nav-link" href="admin.php">';
                    break;
                case 2:
                    echo '<a class="nav-link" href="presidencia.php">';
                    break;
                case 3:
                    echo '<a class="nav-link" href="analista.php">';
                    break;
                case 4:
                    echo '<a class="nav-link" href="tecnico.php">';
                    break;
                case 5:
                    echo '<a class="nav-link" href="verificador.php">';
                    break;  
                case 6:
                    echo '<a class="nav-link" href="coordinador.php">';
                    break;    
            }    
        ?>

        <img src="img/svg/house.svg " alt="Industrias Canaima" width="22" height="22">
        <span>Home</span></a>
    </li>

    <!-- divider -->
    <hr class="sidebar-divider">

    <!-- heading -->
    <div class="sidebar-heading">
        administrar
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true"
            aria-controls="collapsePages">
            <img src="img/svg/setting.svg" alt="Industrias Canaima" width="22" height="22">

            <?php
           
            if($rol != 6){
                $nombreBoton = "Administrar";
                
                 $items = '<a class="collapse-item" href="listadeusuario.php">Usuarios</a>
                           <a class="collapse-item" href="dispositivosentrada.php">Dispositivos</a>
                           <div class="btn-group dropright">
                                <a type="button" class="collapse-item dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Beneficiario
                                </a>
                                <div class="dropdown-menu">
                                <a class ="dropdown-item" href="listadebeneficiario.php?origen=1">Apoyo Insittucional</a>
                                <a class ="dropdown-item" href="listadebeneficiario.php?origen=2">Beneficiario</a>
                                <a class ="dropdown-item" href="listadebeneficiario.php?origen=3">Trabajador</a>
                                <a class ="dropdown-item" href="listadebeneficiario.php?origen=4">Jornadas Especiales</a>
                                </div>
                            </div>
                           ';
            } else{
                $nombreBoton = "Asignar";

                $items = '<a class="collapse-item" href="asignar.php?tipo=analista">Analista</a>
                         <a class="collapse-item" href="asignar.php?tipo=tecnico">Técnico</a>
                         <a class="collapse-item" href="asignar.php?tipo=verificador">Verificador</a>';
            }
            echo "<span>$nombreBoton</span>";
            ?>

        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?php 
                echo $items;
            ?>
            </div>
        </li>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->

    <?php

        if($rol != 6){
            echo 
            '<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="img/svg/grafica.svg " alt="Industrias Canaima" width="22" height="22">
                    <span>Graficas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="dispositivoRecibidosGraficas.php">Recibidos</a>
                        <a class="collapse-item" href="dispositivoEntregadosGraficas.php">Entregados</a>
                    </div>
                </div>
            </li>';
        }
    ?>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <img src="img/svg/table.svg " alt="Industrias Canaima" width="22" height="22">
            <span>Tablas</span>
        </a>
        <?php 
            switch($rol){
                case 6: 
                    echo
                    '<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">'.
                    '<div class="bg-white py-2 collapse-inner rounded">'.
                    '<a class="collapse-item" href="dispositivosRecibidos.php?id=1">Recibidos</a>'.
                    '<a class="collapse-item" href="dispositivosreparados.php?id=3">Reparados</a>'.
                    '<a class="collapse-item" href="dispositivosVerificados.php?id=5">Verificados</a>'.
                    '<a class="collapse-item" href="dispositivosEntregados.php?id=7">Entregados</a>'.
                    '</div>'.
                    '</div>'.
                    '</li>';
                break;
                default: 
                    echo
                    '<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">'.
                    '<div class="bg-white py-2 collapse-inner rounded">'.
                    '<a class="collapse-item" href="dispositivosRecibidos.php?id=1">Recibidos</a>'.
                    '<a class="collapse-item" href="dispositivosdeSalida.php?id=2">En Linea</a>'. 
                    '<a class="collapse-item" href="dispositivosreparados.php?id=3">Reparados</a>'.
                    '<a class="collapse-item" href="dispositivoporverificar.php?id=4">Por verificar</a>'. 
                    '<a class="collapse-item" href="dispositivosVerificados.php?id=5">Verificados</a>'.
                    '<a class="collapse-item" href="dispositivosporentregar.php?id=6">Por entregar</a>'.
                    '<a class="collapse-item" href="dispositivosEntregados.php?id=7">Entregados</a>'.
                    '</div>'.
                    '</div>'.
                    '</li>';
                break;
            }
        ?>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->