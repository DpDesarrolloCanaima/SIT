<!-- Modal -->
<div class="modal fade" id="editDis<?php echo $row['id_datos_del_dispositivo'];?>" tabindex="-1"
    aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="title-head-modal">Editar Dispositivo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form name="crearusuario" action="updateDispo.php" method="POST">
                    <div class="form-group">
                        <label for="tipo_De_equipo">Tipo de Equipo</label>
                        <select name="tipo_de_equipo" id="tipo_de_equipo" class="form-control form-control-lg">
                            <?php foreach ($resultado5 as $row5) : ?>
                            <option value="<?php echo $row5['id_tipo_de_equipo']; ?>"><?php echo $row5['nombre']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">Serial del Equipo</label>
                        <input type="text" class="form-control" id="serial_del_equipo" aria-describedby="nameHelp"
                            name="serial_del_equipo" value="<?php echo $row['serial_equipo'];?>" pattern="[a-zA-Z]{18}" title="El serial solo posee 18 caracteres.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Serial del Cargador</label>
                        <input type="text" class="form-control" id="serial_cargador" name="serial_cargador"
                            value="<?php echo $row['serial_de_cargador'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha de Recepcion</label>
                        <input type="date" class="form-control" id="fecha_de_recepcion" name="fecha_de_recepcion"
                            value="<?php echo $row['fecha_de_recepcion'];?>">
                    </div>
                    <div class="form-group">
                        <label for="Estado de Recepción Del Equipo">Estado de Recepción Del Equipo</label>
                        <select name="estado_recepcion" id="estado_recepcion" class="form-control form-control-lg">
                            <?php foreach ($resultado11 as $row11) : ?>
                            <option value="<?php echo $row11['id']; ?>"><?php echo $row11['estado']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="motivo">Falla del Equipo</label>
                        <select name="falla" id="falla" class="form-control form-control-lg">
                            <?php foreach ($resultado9 as $row9) : ?>
                            <option value="<?php echo $row9['id_motivo']; ?>"><?php echo $row9['tipo_de_motivo']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="3"
                            name="observaciones"><?php echo $row['observaciones_analista'];?></textarea>
                    </div>
                    <input type="hidden" name="origen" value="<?php echo $row['id_origen'];?>">
                    <input type="hidden" name="id_roles" value="<?php echo $rol;?>">
                    <input type="hidden" name="estatus" value="1">
                    <input type="hidden" name="beneficiario" value="<?php echo $row['id_datos_del_beneficiario'];?>">
                    <input type="hidden" name="idEditDispo" value="<?php echo $row['id_datos_del_dispositivo'];?>">
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