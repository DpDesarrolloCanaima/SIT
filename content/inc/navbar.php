<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?php
            switch ($rol) {
                case 1:
                    echo '<a class="navbar-brand ps-3" href="administrador.php">SIT | Produccion</a>';
                    break;
                case 2:
                    echo '<a class="navbar-brand ps-3" href="aduana.php">SIT | Produccion</a>';
                    # code...
                    break;
                case 3:
                    echo '<a class="navbar-brand ps-3" href="armador.php">SIT | Produccion</a>';
                    break;
                case 4:
                    echo '<a class="navbar-brand ps-3" href="ensamblador.php">SIT | Produccion</a>';
                    break;
                case 5:
                    echo '<a class="navbar-brand ps-3" href="prueba-inicial.php">SIT | Produccion</a>';
                    break;
                case 6:
                    echo '<a class="navbar-brand ps-3" href="prueba-final.php">SIT | Produccion</a>';
                    break;
                case 7:
                    echo '<a class="navbar-brand ps-3" href="Empaquetador.php">SIT | Produccion</a>';
                    break;
                default:
                    echo  "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Rol no existente',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                          }).then(() => {
                            location.assign('index.php');
                          });
                });
                    </script>";
                        break;
            }
        
        ?>
            <!-- Navbar Brand-->
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>