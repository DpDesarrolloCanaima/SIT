<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <?php
             //    Comprobación de rol de usuario y muestra de enlace de home.
            switch ($rol) {
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
             //    Comprobación de rol de usuario y muestra de enlace de home.
            switch ($rol) {
                case 6:
                    echo '<a class="nav-link" href="analista.php">';
                    break;
                case 7:
                    echo '<a class="nav-link" href="tecnico.php">';
                    break;
                case 8:
                    echo '<a class="nav-link" href="verificador.php">';
                    break;    
                default:
                    header("Location: 404.php");
                    break;
            }    
        ?>
            <img src="img/svg/house.svg " alt="Industrias Canaima" width="22" height="22">
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->