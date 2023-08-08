<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Dispositivos</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <tbody>

                        <?php


                        /*$sqlid = "SELECT * FROM datos_del_dipotivo WHERE id_datos_de_dispositivo=".intval($_GET['id']);
                        
                        $rowdeid = $mysqli->query($sqlid);*/
                        $rowde = $resultado->fetch_assoc();

                        echo "
                        <tr>
                        <th>Tipo de Dispositivo</th>
                        <td>".
                        $rowde['nombre']."
                        </td>
                        </tr>
                        <tr>
                        <th>Modelo</th>
                        <td>".
                        $rowde['modelo']."
                        </td>
                        </tr>
                        <tr>
                        <th>Serial del Equipo</th>
                        <td>".
                        $rowde['serial_equipo']."
                        </td>
                        </tr>
                        <tr>
                        <th>Serial del Cargador</th>
                        <td>".
                        $rowde['serial_de_cargador']."
                        </td>
                        </tr>
                        
                        <tr>
                        <th>Institucion Educativa</th>
                        <td>".
                        $rowde['institucion_educativa']."
                        </td>
                        </tr>
                        <tr>
                        <th>Institucion Educativa (Donde estudia)</th>
                        <td>".
                        $rowde['institucion_donde_estudia']."
                        </td>
                        </tr>
                        <tr>
                        <th>Grado</th>
                        <td>".
                        $rowde['grado']."
                        </td>
                        </tr>
                        <tr>
                        <th>Fecha de Recepción</th>
                        <td>".
                        $rowde['fecha_de_recepcion']."
                        </td>
                        </tr>
                        <tr>
                        <th>Estado de Recepción Del Equipo</th>
                        <td>".
                        $rowde['estado']."
                        </td>
                        </tr>
                        <tr>
                        <th>Equipo Reincidio</th>
                        <td>".
                        $rowde['equipo_reincidio']."
                        </td>
                        </tr>
                        <tr>
                        <th>Motivo de Reincidencia</th>
                        <td>".
                        $rowde['tipo_de_motivo']."
                        </td>
                        </tr>
                        <tr>
                        <th>Observaciones</th>
                        <td>".
                        $rowde['observaciones']."
                        </td>
                        </tr>
                        <tr>
                        <th>Origen</th>
                        <td>".
                        $rowde['origen']."
                        </td>
                        </tr>
                        <tr>
                        <th>Estatus</th>
                        <td>".
                        $rowde['estatus']."
                        </td>
                        </tr>
                        <tr>
                        <th>Opciones</th>".'   
                        <td>
                            <div class="btn-group">
                                <button type="button" class="" data-toggle="dropdown" aria-expanded="false">
                                    Options
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item btn btn-warning" data-toggle="modal"
                                        data-target="#modalEdit" href="#"><img src="img/svg/editar.svg "
                                            alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                    <a class="dropdown-item btn btn-danger" href="#"><img
                                            src="img/svg/eliminar.svg " alt="Industrias Canaima" width="15"
                                            height="15"> Eliminar</a>
                                </div>
                            </div>
                        </td>
                        </tr>                         
                        ';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->