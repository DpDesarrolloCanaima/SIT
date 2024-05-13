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
                            <li class="breadcrumb-item active">Aduana | Registro de Cargadores</li>
                        </ol>
                        <!-- Button trigger modal -->
                        <div class="container my-4">
                            <div class="row p-4">
                                <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="mb-3">
                                        <form class="task-form">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Serial de Cargador</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="82B231019463503016312">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Guardar</button>
                                                <button type="reset" class="btn btn-warning" ><i class="bi bi-backspace-reverse"></i> Limpiar</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                    <div class="col-md-7">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <td class="text-center">Serial</td>
                                    <td class="text-center">Registro</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                               
                            </div>
                        </div>
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
