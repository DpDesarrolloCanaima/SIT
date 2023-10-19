<!-- Modal -->
<div class="modal fade" id="modalDispo<?php echo $row['id_datos_del_entregante'];?>" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="agregarDispo">Agregar Dispositivo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="guardarDispo.php" method="POST">
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
                    <input type="hidden" name="origen" value = "<?php echo $row['origen'];?>">
                    <input type="hidden" name="id_roles" value="<?php echo $rol;?>">
                    <input type="hidden" name="estatus" value="1">
                    <input type="hidden" name="beneficiario" value = "<?php echo $row['id_datos_del_entregante'];?>">
                    <input type="hidden" name="responsable" value="6">
                    <hr>
                    <button type="submit" class="btn btn-success" >Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
</div>