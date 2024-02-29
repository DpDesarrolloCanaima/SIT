<!-- Modal -->
<div class="modal fade" id="verificarModalTablet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="AgregarReparacion">Reparacion de equipo tablet
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registroReparacionTablet">
                    <div class="form-group">
                        <label for="serial_salida_pantalla">Serial de entrada (pantalla)</label>
                        <input type="text" class="form-control" id="serial_entrada_pantalla"
                            name="serial_salida_pantalla" pattern="[A-Z0-9\s]{8,25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_pantalla">Serial de salida (pantalla)</label>
                        <input type="text" class="form-control" id="serial_salida_pantalla"
                            name="serial_salida_pantalla" pattern="[A-Z0-9\s]{8,25}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="pila_bios">Cambio de pin de carga?</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="pin_carga" id="pin_carga"
                                value="si">
                            <label class="form-check-label" for="pila_bios_1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="pin_carga" id="pin_carga"
                                value="no">
                            <label class="form-check-label" for="pila_bios_2">
                                No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_cara_b">Se realizo cambio de boton de encendido?</label>
                        <div class="form-check">
                            <input class="form-check-input i-radio" type="radio" name="boton_encendido" id="boton_encendido"
                                value="si">
                            <label class="form-check-label" for="serial_caraB">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="boton_encendido" id="boton_encendido"
                                value="no">
                            <label class="form-check-label" for="serial_caraB">
                                No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_entrada_cargador">Serial de entrada (cargador)</label>
                        <input type="text" class="form-control" id="serial_entrada_cargador"
                            name="serial_entrada_cargador" pattern="[A-Z0-9\s]{8,21}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="serial_salida_cargador">Serial de salida (cargador)</label>
                        <input type="text" class="form-control" id="serial_salida_cargador"
                            name="serial_salida_cargador" pattern="[A-Z0-9\s]{8,21}"
                            title="Caracteres maximos 25. Solo mayusculas y numeros.">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
                    </div>
                    <hr>
                    <input type="hidden" id="id_status" name="id_status" value="3">
                    <?php foreach($resultadoResponsable as $rowResponsable ):?>
                    <input type="hidden" id="responsableRecepcion" name="responsableRecepcion" value="<?php echo $rowResponsable['usuario'];?>">
                    <?php endforeach;?>
                    
                    <input type="hidden" id="responsable" name="responsable" value="<?php echo $id_usuario;?>">
                    <input type="hidden" id="id_roles" name="id_roles" value="<?php echo $rol;?>">
                    <input type="hidden" id="id_dispositivo" name="id_dispositivo" value="<?php echo $rowde['id_dispositivo']?>">
                    <input type="hidden" id="tipo_de_dispositivo" name="tipo_de_dispositivo"
                        value="<?php echo $rowde['id_tipo_de_dispositivo'];?>">
                    <input type="hidden" name="ic_dispositivo" id="ic_dispositivo" value="<?php echo $rowde['ic_dispositivo'];?>"> 
                    <hr>
                    <!-- <button type="submit" class="btn btn-success">Actualizar</button> -->
                    <input type="button" class="btn btn-success" onclick="registrarReparacionTablet()" value="Registrar"> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </form>
            </div>
        </div>
    </div>
</div>