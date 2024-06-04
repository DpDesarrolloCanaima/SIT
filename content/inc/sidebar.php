<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                                <?php
                                    switch ($rol) {
                                        case 1:
                                            echo '
                                                <a class="nav-link" href="administrador.php">
                                                    <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                                        Inicio
                                                </a>
                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRegistros" aria-expanded="false" aria-controls="collapseRegistros">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                                        Administrar
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>
                                                <div class="collapse" id="collapseRegistros" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapsePartesypiezas" aria-expanded="false" aria-controls="pagesCollapsePartesypiezas">
                                                            Personal
                                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                        </a>
                                                        <div class="collapse" id="pagesCollapsePartesypiezas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                            <nav class="sb-sidenav-menu-nested nav">
                                                                <a class="nav-link" href="listadepersonas.php">Lista de Personas</a>
                                                            </nav>
                                                        </div>
                                                    </nav>
                                                </div>
                                            ';
                                            break;
                                        case 2:
                                            echo '
                                                <a class="nav-link" href="aduana.php">
                                                <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                                    Inicio
                                                </a>
                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRegistros" aria-expanded="false" aria-controls="collapseRegistros">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                                    Registros
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>
                                                <div class="collapse" id="collapseRegistros" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapsePartesypiezas" aria-expanded="false" aria-controls="pagesCollapsePartesypiezas">
                                                            Partes y Piezas
                                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                        </a>
                                                        <div class="collapse" id="pagesCollapsePartesypiezas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                            <nav class="sb-sidenav-menu-nested nav">
                                                                <a class="nav-link" href="registroDisco.php">Discos Duros</a>
                                                                <a class="nav-link" href="registroMemoria.php">Memorias Ram</a>
                                                                <a class="nav-link" href="registroPantalla.php">Pantallas</a>
                                                                <a class="nav-link" href="registroBateria.php">Baterias</a>
                                                                <a class="nav-link" href="registroCargador.php">Cargadores</a>
                                                                <a class="nav-link" href="registroCaraB.php">Caras B</a>
                                                                <a class="nav-link" href="registroCaraA.php">Caras A</a>
                                                            </nav>
                                                        </div>
                                                    </nav>
                                                </div>
                                            ';
                                            # code...
                                            break;
                                        case 3:
                                            echo '
                                                <a class="nav-link" href="armador.php">
                                                <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                                    Inicio
                                                </a>
                                            ';
                                            break;
                                        case 4:
                                            echo '
                                                <a class="nav-link" href="ensamblador.php">
                                                <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                                    Inicio
                                                </a>
                                            ';
                                            break;
                                        case 5:
                                            echo '
                                                <a class="nav-link" href="prueba-inicial.php">
                                                <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                                    Inicio
                                                </a>
                                            ';
                                            break;
                                        case 6:
                                            echo '
                                                <a class="nav-link" href="prueba-final.php">
                                                <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                                    Inicio
                                                </a>
                                            ';
                                            break;
                                        case 7:
                                            echo '<a class="nav-link" href="Empaquetador.php">
                                            <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                                Inicio
                                            </a>';
                                            break;
                                        default:
                                            # code...
                                            break;
                                    }
                                ?>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Inicio Sesion en:</div>
                        Sistema de inventario y Trazabilidad | Produccion
                    </div>
                </nav>
            </div>