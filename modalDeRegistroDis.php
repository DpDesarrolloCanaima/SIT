<!-- Modal -->
<div class="modal fade" id="modalDispo" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-titlen text-dark mx-auto" id="NuevoModalLabel">Agregar Dispositivo</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
            </div>
            <div class="modal-body">
                <form name="crearusuario" action="guardaDispo.php" method="POST" class="">

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
                        <input type="text" class="form-control" id="serial_del_cargador" name="serial_cargador"
                            pattern="[a-zA-z0-9]">
                            <span></span>
                    </div>
                    <div class="form-group">
                        <label for="institucion_educativa">Institucion Educativa (Donde se recibio el equipo)</label>
                        <input type="text" class="form-control" id="institucion_educativa" name="institucion_educativa">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="institucion_donde_estudia">Institucion Educativa (Donde Estudia el beneficiario)</label>
                        <input type="text" class="form-control" id="institucion_donde_estudia"
                            name="institucion_donde_estudia">
                        <span></span>
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
                        <label for="fecha_de_recepcion">Fecha de Recepcion</label>
                        <input type="date" class="form-control" id="fecha_de_recepcion" name="fecha_de_recepcion">
                    </div>
                    <div class="form-group">
                        <label for="Estado_de_Recepción_Del_Equipo">Estado de Recepción Del Equipo</label>
                        <select name="estado_recepcion" id="Estado_de_Recepción_Del_Equipo" class="form-control form-control-lg">
                            <?php foreach ($resultado11 as $row11) : ?>
                            <option value="<?php echo $row11['id']; ?>"><?php echo $row11['estado']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">El Equipo Reincidio</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="equipo_reincidio" id="Estado_si"
                                value="si" checked>
                            <label class="form-check-label" for="Estado_si">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="equipo_reincidio" id="Estado_no"
                                value="no">
                            <label class="form-check-label" for="Estado_no">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="motivoReincidencia">Motivo de reincidencia</label>
                        <textarea class="form-control reincidencia" id="motivoReincidencia" rows="3"
                            name="motivoReincidencia"></textarea>
                        <span></span>
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
                        <textarea class="form-control" id="observaciones" rows="3"
                            name="observaciones"></textarea>
                            <span></span>
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <select name="cargo" id="cargo" class="form-control form-control-lg">
                            <?php foreach ($resultado4 as $row4) : ?>
                            <option value="<?php echo $row4['id_cargo']; ?>"><?php echo $row4['tipo_de_cargo']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
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
                        <label for="beneficiario">Beneficiario</label>
                        <select name="beneficiario" id="beneficiario" class="form-control form-control-lg">
                            <?php foreach ($result as $row13) : ?>
                            <option value="<?php echo $row13['id_datos_del_entregante']; ?>">
                                <?php echo $row13['cedula']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="hidden" name="id_roles">
                    <hr>
                    <button type="submit" class="btn btn-primary" name="registrar">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</form>
</div>