<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dispositivo</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="form-inline" action="verificartecnico.php" method="get">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <tbody>

                            <?php
                        $rowde = $resultado->fetch_assoc();
                          $verestatus = $rowde['estatus'];
                        if ($verestatus == "Recibidos") {
                            echo '
                            <a class="btn btn-primary"
                            href="actualizartecni.php?id='.$rowde['id_dispositivo'].'&responsable='.$id_usuario.'&rol='.$rol.'&estatus=2"
                            role="button">Actualizar</a>

                            ';
                            }
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
                                    <?php echo $rowde['observaciones_analista'];?>
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

                        </tbody>
                    </table>
                    <?php
                     $verestatus = $rowde['estatus'];
                     if ($verestatus == "En la linea") {
                         echo '
                         <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#verificarModal">
                        Reparado
                    </button>
                         ';
                         }
                            include "modaltecnico.php";
                            
                        ?>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->