<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>-->
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dispositivo</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form class="form-inline" action="verificar.php" method="get">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <tbody>

                            <?php
                        $rowde = $resultado->fetch_assoc();
                        ?>
                            <tr>
                                <th>Tipo de Dispositivo</th>
                                <td><?php echo $rowde['nombre'];?></td>
                            </tr>
                            <tr>
                                <th>Modelo</th>
                                <td><?php echo $rowde['modelo'];?></td>
                            </tr>
                            <tr>
                                <th>Serial Del Equipo</th>
                                <td><?php echo $rowde['serial_equipo'];?></td>
                            </tr>
                            <tr>
                                <th>Serial del Cargador</th>
                                <td><?php echo $rowde['serial_de_cargador'];?></td>
                            </tr>
                            <tr>
                                <th>Fecha de recepcion</th>
                                <td><?php echo $rowde['fecha_de_recepcion'];?></td>
                            </tr>
                            <tr>
                                <th>Estado de Recepcion del Equipo</th>
                                <td><?php echo $rowde['estado'];?></td>
                            </tr>
                            <tr>
                                <th>Falla</th>
                                <td><?php echo $rowde['tipo_de_motivo'];?></td>
                            </tr>
                            <tr>
                                <th>Observaciones</th>
                                <td>
                                    <div class="form-group">
                                        <label for="Observacion" class="sr-only w-100">Observación</label>
                                        <textarea class="form-control" rows="5" id="Observacion" name="Observacion"><?php echo $rowde['observaciones'];?>
                                    </textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Origen</th>
                                <td>
                                    <?php echo $rowde['origen'];?>
                                </td>
                            </tr>
                            <tr>
                                <th>Estatus</th>
                                <td>
                                    <?php echo $rowde['estatus'];?>
                                </td>
                            </tr>
                            <!--<input type="hidden" name="id_status" value="3">-->
                            <input type="hidden" name="responsable" value="<?php echo $id_usuario;?>">
                            <!--<input type="hidden" name="id_roles" value=""--><?php //echo $rol;?>
                        </tbody>
                    </table>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#verificarModal">
                        Verificar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="verificarModal" tabindex="-1" aria-labelledby="verificarModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="verificarModalLabel">¿Seguro que quieres realizar
                                        cambios?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary">Verificar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->