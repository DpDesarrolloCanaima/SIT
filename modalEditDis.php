<!-- Modal -->
<div class="modal fade" id="editDis<?php echo $row['id_datos_del_dispositivo'];?>" tabindex="-1"
    aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="title-head-modal">Editar Dispositivo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            name="serial_del_equipo" value="<?php echo $row['serial_equipo'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Serial del Cargador</label>
                        <input type="text" class="form-control" id="serial_cargador" name="serial_cargador"
                            value="<?php echo $row['serial_de_cargador'];?>">
                    </div>
                    <div class=" form-group">
                        <label for="exampleInputPassword1">Institucion Educativa</label>
                        <input type="text" class="form-control" id="institucion_educativa" name="institucion_educativa"
                            value="<?php echo $row['institucion_educativa'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Institucion Educativa (Donde Estudia)</label>
                        <input type="text" class="form-control" id="institucion_donde_estudia"
                            name="institucion_donde_estudia" value="<?php echo $row['institucion_donde_estudia'];?>">
                    </div>
                    <div class="form-group">
                        <label for="grado">Grado</label>
                        <select name="grado" id="grado" class="form-control form-control-lg">
                            <?php foreach ($resultado10 as $row10) : ?>
                            <option value="<?php echo $row10['id_grado']; ?>"><?php echo $row10['grado']; ?></option>
                            <?php endforeach; ?>
                        </select>
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
                        <label for="exampleInputPassword1">El Equipo Reincidio</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="equipo_reincidio" id="equipo_reincidio"
                                value="si" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="equipo_reincidio" id="equipo_reincidio2"
                                value="no">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="motivoReincidencia">Motivo de reincidencia</label>
                        <textarea class="form-control reincidencia" id="motivoReincidencia" rows="3"
                            name="motivoReincidencia"><?php echo $row['motivo_reincidencia'];?></textarea>
                        <span></span>
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
                            name="observaciones"><?php echo $row['observaciones'];?></textarea>
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
                        <label for="estatus">Estatus</label>
                        <select name="estatus" id="estatus" class="form-control form-control-lg">
                            <?php foreach ($resultado12 as $row12) : ?>
                            <option value="<?php echo $row12['id_estatus']; ?>"><?php echo $row12['estatus']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipo_De_equipo">Beneficiario</label>
                        <select name="beneficiario" id="beneficiario" class="form-control form-control-lg">
                            <?php foreach ($result as $row13) : ?>
                            <option value="<?php echo $row13['id_datos_del_entregante']; ?>">
                                <?php echo $row13['nombre_del_beneficiario']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <select name="responsable" id="responsable" class="form-control form-control-lg">
                            <?php foreach ($resultado14 as $row14) : ?>
                            <option value="<?php echo $row14['id_usuarios']; ?>">
                                <?php echo $row14['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fechaEntrega">Fecha de Entrega</label>
                        <input type="date" class="form-control" id="fechaEntrega" name="fecha_de_entrega"
                            value="<?php echo $row['fecha_de_entrega'];?>">
                    </div>
                    <input type="hidden" name="id_roles" id="id_roles" value="<?php echo $rol?>">
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