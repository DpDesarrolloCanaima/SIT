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
                            <li class="breadcrumb-item active">Administrador</li>
                        </ol>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistrarPersona">
                        <i class="bi bi-journal-plus"></i> Registar Persona
                        </button>
                    </div>
                </main>
                <?php
                    include "content/inc/footer.php";
                ?>
            </div>
        </div>
        <?php
            include "content/modal/admin/registarPersona.php";
            include "content/inc/script.php";
        ?>
    </body>
</html>
