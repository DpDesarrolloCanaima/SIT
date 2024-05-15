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
                            <li class="breadcrumb-item active">Aduana | Registro de Caras B</li>
                        </ol>
                        <!-- Button trigger modal -->
                        <div class="container my-4">
                            <div class="row p-4">
                                <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="mb-3">
                                        <form id="RegistroCaraB">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Serial de Cara B</label>
                                                <input type="text" class="form-control" id="serial_carab" placeholder="SZLEF10MI252208416">
                                            </div>
                                            <div class="my-3">
                                                <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Guardar</button>
                                                <a href="" class="btn btn-success" onclick="RegistroCaraB()">Guardar</a>
                                                <input type="submit" class="btn btn-success" onclick="RegistroCaraB()" value="Enviar">
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
            include "content/inc/script.php";
        ?>
        <script src="js/register/registroCarab.js"></script>
    </body>
</html>
