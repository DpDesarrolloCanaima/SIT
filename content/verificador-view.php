<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-print fa-sm text-white-50"></i> Generar Reporte</a> -->
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Dispositivos</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tipo de Dispositivo</th>
                            <th>Modelo</th>
                            <th>Serial del Equipo</th>
                            <th>Serial del Cargador</th>
                            <th>Grado</th>
                            <th>Fecha de Recepción</th>
                            <th>Estado de Recepción Del Equipo</th>
                            <th>Equipo Reincidio</th>
                            <th>Motivo de Reincidencia</th>
                            <th>Observaciones</th>
                            <th>Origen</th>
                            <th>Estatus</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row8 = $resultado8->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row8['nombre']; ?></td>
                            <td><?php echo $row8['modelo']; ?></td>
                            <td><?php echo $row8['serial_equipo']; ?></td>
                            <td><?php echo $row8['serial_de_cargador']; ?></td>
                            <td><?php echo $row8['grado']; ?></td>
                            <td><?php echo $row8['fecha_de_recepcion']; ?></td>
                            <td><?php echo $row8['estado']; ?></td>
                            <td><?php echo $row8['equipo_reincidio']; ?></td>
                            <td><?php echo $row8['tipo_de_motivo']; ?></td>
                            <td><?php echo $row8['observaciones']; ?></td>
                            <td><?php echo $row8['origen']; ?></td>
                            <td><?php echo $row8['estatus']; ?></td>
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
                        <?php
                                        };
                                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->