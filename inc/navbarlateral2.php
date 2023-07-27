<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<?php    
    switch($rol){
    case 6:
                    echo '<a class="sidebar-brand d-flex align-items-center justify-content-center" href="analista.php">';
                    break;
                case 7:
                    echo '<a class="sidebar-brand d-flex align-items-center justify-content-center" href="tecnico.php">';
                    break;
                case 8:
                    echo '<a class="sidebar-brand d-flex align-items-center justify-content-center" href="verificador.php">';
                    break;    
                default:
                    header("Location: 404.php");
                    break;} 

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
             //    Comprobación de rol de usuario y muestra de enlace de home.
            switch ($rol) {
                case 1:
                    echo '<a class="nav-link" href="admin.php">';
                    break;
                case 2:
                    echo '<a class="nav-link" href="presidencia.php">';
                    break;
                case 6:
                    echo '<a class="nav-link" href="analista.php">';
                    break;
                case 7:
                    echo '<a class="nav-link" href="tecnico.php">';
                    break;
                case 8:
                    echo '<a class="nav-link" href="verificador.php">';
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <img src="img/svg/setting.svg" alt="Industrias Canaima" width="22" height="22">
            <span>Administrar</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="dispositivosentrada.php">Dispositivos</a>
                <a class="collapse-item" href="listadebeneficiario.php">Beneficiario</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
