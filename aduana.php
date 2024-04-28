<?php 
include "content/inc/header.php";

include "content/inc/navbar.php";
?>
        
        <div id="layoutSidenav">
            <?php include "content/inc/sidebar.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sistema de Inventario y Trazabilidad | Produccion</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Aduana</li>
                        </ol>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistroDeMemoria">
                            Registrar Memoria Ram
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistroDePantalla">
                            Registrar Pantalla
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistroDeBateria">
                            Registrar Bateria
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistroDeCargador">
                            Registrar Cargador
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistroDeCaraB">
                            Registrar Cara B
                        </button>

                    </div>
                </main>
                <?php
                    include "content/inc/footer.php";
                ?>
            </div>
        </div>
        <?php
            include "content/modal/aduana/memoriaRam.php";
            include "content/modal/aduana/bateria.php";
            include "content/modal/aduana/caraB.php";
            include "content/modal/aduana/cargador.php";
            include "content/modal/aduana/pantalla.php";
            include "content/inc/script.php";
        ?>
    </body>
</html>
