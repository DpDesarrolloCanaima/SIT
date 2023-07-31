 <!-- Topbar -->
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

     <!-- Sidebar Toggle (Topbar) -->
     <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
         <i class="fa fa-bars"></i>
     </button>


     <!-- Topbar Navbar -->
     <ul class="navbar-nav ml-auto">

         <!-- Nav Item - Search Dropdown (Visible Only XS) -->
         <li class="nav-item dropdown no-arrow d-sm-none">
             <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-search fa-fw"></i>
             </a>
             <!-- Dropdown - Messages -->
             <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                 aria-labelledby="searchDropdown">
                 <form class="form-inline mr-auto w-100 navbar-search">
                     <div class="input-group">
                         <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                             aria-label="Search" aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <button class="btn btn-primary" type="button">

                                 <i class="fas fa-search fa-sm"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li>

         <button type="button" id="btnNotificacion">
             <img width="30" height="30" src="notificaciones/icono/notificacion.svg" alt="Icono svg">
         </button>

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
                     header("Location: 404.php");
                     break;
                 case 4:
                     header("Location: 404.php");
                     break;
                 case 5:
                     header("Location: 404.php");
                     break;
                 case 6:
                     echo "Analista";
                     break;
                 case 7:
                     echo "Tecnico";
                     break;
                 case 8:
                     echo "Verificador";
                     break;
            }

                ?>

                 </span>
                 <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
             </a>
             <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Salir
                 </a>

             </div>
         </li>

     </ul>

 </nav>


 <script src="notificaciones/index.js"></script>




 <!-- End of Topbar -->