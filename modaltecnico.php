<!-- Modal -->
<div class="modal fade" id="verificarModal" tabindex="-1" aria-labelledby="verificarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verificarModalLabel">¿Seguro que quieres realizar
                    cambios?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="verificartecnico.php" method="POST">
                    <div class="form-group">
                        <label for="serial_entrada_tm">Serial de entrada (Tarjta Madre)</label>
                        <input type="text" class="form-control" id="serial_entrada_tm" name="serial_entrada_tm">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_tm">Serial de salida (Tarjta Madre)</label>
                        <input type="text" class="form-control" id="serial_salida_tm" name="serial_salida_tm">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_pb">Serial de entrada (Pila Bios)</label>
                        <input type="text" class="form-control" id="serial_entrada_pb" name="serial_entrada_pb">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_pb">Serial de salida (Pila Bios)</label>
                        <input type="text" class="form-control" id="serial_salida_pb" name="serial_salida_pb">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_bat">Serial de entrada (Bacteria)</label>
                        <input type="text" class="form-control" id="serial_entrada_bat" name="serial_entrada_bat">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_bat">Serial de salida (Bacteria)</label>
                        <input type="text" class="form-control" id="serial_salida_bat" name="serial_salida_bat">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_tarj_aios">Serial de entrada (Tarjeta IOS)</label>
                        <input type="text" class="form-control" id="serial_entrada_tarj_aios" name="serial_entrada_tarj_aios">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_tarj_aios">Serial de salida (Tarjeta IOS)</label>
                        <input type="text" class="form-control" id="serial_salida_tarj_aios" name="serial_salida_tarj_aios">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_cara_a">Serial de entrada (Cara A)</label>
                        <input type="text" class="form-control" id="serial_entrada_cara_a" name="serial_entrada_cara_a">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_cara_a">Serial de salida (Cara A)</label>
                        <input type="text" class="form-control" id="serial_salida_cara_a" name="serial_salida_cara_a">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_cara_b">Serial de entrada (Cara B)</label>
                        <input type="text" class="form-control" id="serial_entrada_cara_b" name="serial_entrada_cara_b">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_cara_b">Serial de salida (Cara B)</label>
                        <input type="text" class="form-control" id="serial_entrada_cara_b" name="serial_entrada_cara_b">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_cara_c">Serial de entrada (Cara C)</label>
                        <input type="text" class="form-control" id="serial_entrada_cara_c" name="serial_entrada_cara_c">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_cara_c">Serial de salida (Cara C)</label>
                        <input type="text" class="form-control" id="serial_entrada_cara_c" name="serial_entrada_cara_c">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_cara_d">Serial de entrada (Cara D)</label>
                        <input type="text" class="form-control" id="serial_entrada_cara_d" name="serial_entrada_cara_d">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_memoria_ram">Serial de entrada (memoria ram)</label>
                        <input type="text" class="form-control" id="serial_entrada_memoria_ram" name="serial_entrada_memoria_ram">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_memoria_ram">Serial de salida (memoria ram)</label>
                        <input type="text" class="form-control" id="serial_salida_memoria_ram" name="serial_salida_memoria_ram">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_teclado">Serial de entrada (teclado)</label>
                        <input type="text" class="form-control" id="serial_entrada_teclado" name="serial_entrada_teclado">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_teclado">Serial de salida (teclado)</label>
                        <input type="text" class="form-control" id="serial_salida_teclado" name="serial_salida_teclado">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_cargador">Serial de entrada (cargador)</label>
                        <input type="text" class="form-control" id="serial_entrada_cargador" name="serial_entrada_cargador">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_cargador">Serial de salida (cargador)</label>
                        <input type="text" class="form-control" id="serial_salida_cargador" name="serial_salida_cargador">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_pantalla">Serial de entrada (pantalla)</label>
                        <input type="text" class="form-control" id="serial_entrada_pantalla" name="serial_entrada_pantalla">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_tarjeta_red">Serial de entrada (tarjeta de red)</label>
                        <input type="text" class="form-control" id="serial_entrada_tarjeta_red" name="serial_entrada_tarjeta_red">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_tarjeta_red">Serial de salida (tarjeta de red)</label>
                        <input type="text" class="form-control" id="serial_salida_tarjeta_red" name="serial_salida_tarjeta_red">
                    </div>
                    <div class="form-group">
                        <label for="serial_entrada_fan_cooler">Serial de entrada (fan cooler)</label>
                        <input type="text" class="form-control" id="serial_entrada_fan_cooler" name="serial_entrada_fan_cooler">
                    </div>
                    <div class="form-group">
                        <label for="serial_salida_fan_cooler">Serial de salida (fan cooler)</label>
                        <input type="text" class="form-control" id="serial_salida_fan_cooler" name="serial_salida_fan_cooler">
                    </div>
                    <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
                    </div>
                    <input type="hidden" name="id_status" value="3">
                    <input type="hidden" name="responsable" value="<?php echo $id_usuario;?>">
                    <input type="hidden" name="id_roles" value="<?php echo $rol;?>">
                    <input type="hidden" name="id_dispositivo" value="<?php echo $rowde['id_datos_del_dispositivo']?>">
                    <hr>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </form>
            </div>
        </div>
    </div>
</div>