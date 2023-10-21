<!-- Modal -->
<div class="modal fade" id="modalDispo" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="agregarDispo">Agregar Dispositivo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="guardarDispoAnalista.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Tipo</label>
                            <select id="inputState" class="form-control" name="tipo">
                                <?php foreach ($resultado14 as $row14) : ?>
                                <option value="<?php echo $row14['id_documento'];?>">
                                    <?php echo $row14['tipo_documento'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">ingresar</label>
                            <input type="text" class="form-control" id="inputCity" name="cedula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="origen">Origen</label>
                        <select name="origen" id="origen" class="form-control form-control-lg">
                            <?php foreach ($resultado6 as $row6) : ?>
                            <option value="<?php echo $row6['id_origen']; ?>"><?php echo $row6['origen']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipo_De_equipo">Tipo de Equipo</label>
                        <select name="tipo_de_equipo" id="tipo_De_equipo" class="form-control form-control-lg">
                            <?php foreach ($resultado5 as $row5) : ?>
                            <option value="<?php echo $row5['id_tipo_de_equipo']; ?>"><?php echo $row5['nombre']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="serial_del_equipo">Serial del Equipo</label>
                        <input type="text" class="form-control" id="serial_del_equipo" aria-describedby="nameHelp"
                            name="serial_del_equipo">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="serial_del_cargador">Serial del Cargador</label>
                        <input type="text" class="form-control" id="serial_del_cargador" name="serial_cargador">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="fecha_de_recepcion">Fecha de Recepcion</label>
                        <input type="date" class="form-control" id="fecha_de_recepcion" name="fecha_de_recepcion">
                    </div>
                    <div class="form-group">
                        <label for="Estado_de_Recepción_Del_Equipo">Estado de Recepción Del Equipo</label>
                        <select name="estado_recepcion" id="Estado_de_Recepción_Del_Equipo"
                            class="form-control form-control-lg">
                            <?php foreach ($resultado11 as $row11) : ?>
                            <option value="<?php echo $row11['id']; ?>"><?php echo $row11['estado']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="falla">Falla del Equipo</label>
                        <select name="falla" id="falla" class="form-control form-control-lg">
                            <?php foreach ($resultado9 as $row9) : ?>
                            <option value="<?php echo $row9['id_motivo']; ?>"><?php echo $row9['tipo_de_motivo']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
                        <span></span>
                    </div>
                    <input type="hidden" name="id_roles" value="<?php echo $rol;?>">
                    <input type="hidden" name="estatus" value="1">

                    <input type="hidden" name="responsable" value="<?php echo $idusuario; ?>">
                    <hr>
                    <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</form>
</div>