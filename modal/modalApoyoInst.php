<!-- Modal -->
<div class="modal fade" id="modalApoyo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="agregarBene">Registrar Apoyo Institucional
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formularioApoyoRegistro">
                    <div class="form-group">
                    <label for="inputAddress">Ingrese el RIF</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">RIF</div>
                            </div>
                            <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" name="documento" id="documento" pattern="[0-9]{9}" title="Debe ingresar el RIF en solo digitos">
                            <input type="hidden" name="tipo_documento" value="2" id="tipo_documento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre_bene">Nombre de la institucion</label>
                        <input type="text" class="form-control" id="nombre_de_institucion" name="nombre_de_institucion" pattern="[a-zA-Z\s]{3,80}" title="Maximo de caracteres 80">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="correoBene">Correo</label>
                        <input type="email" class="form-control" id="correoApoyo" aria-describedby="emailHelp"
                            name="correoApoyo">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{11}" title="El numero debe ingresarse con solo digitos">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-control form-control-lg">
                            <?php foreach ($resultado7 as $row7) : ?>
                            <option value="<?php echo $row7['id_estados']; ?>"><?php echo $row7['estado_nombre']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" pattern="[a-zA-Z\s]{10,60}">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dirección</label>
                        <textarea class="form-control" id="direccion" rows="3"
                            name="direccion"></textarea>
                        <span></span>
                    </div>
                    <hr>
                    <input type="hidden" name="origen" id="origen" value="1">
                    <!-- <button type="submit" class="btn btn-success" onclick="registroApoyo()">Enviar</button> -->
                    <input type="button" class="btn btn-success" onclick="registroApoyo()" value="Registrar">
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>