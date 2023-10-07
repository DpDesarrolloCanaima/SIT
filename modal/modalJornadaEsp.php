<!-- Modal -->
<div class="modal fade" id="modalJornada" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="agregarBene">Registrar Jornada Especial</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form  action="" method="POST">
                <div class="form-group">
                        <label for="inputAddress">IC</label>
                        <input type="number" class="form-control" id="inputAddress" name="ic">
                    </div>
                    <div class="form-group">
                    <label for="inputAddress">Ingrese el Nª de Jornada</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">Nª</div>
                            </div>
                            <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" name="documento">
                            <input type="hidden" name="tipo_documento" value="4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre_bene">Nombre de la institucion</label>
                        <input type="text" class="form-control" id="nombre_bene" name="nombre_de_institucion_jornada">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="correoBene">Correo</label>
                        <input type="email" class="form-control" id="correoJornada" aria-describedby="emailHelp"
                        name="correoJornada">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="telfBene">Telefono</label>
                        <input type="text" class="form-control" id="telfBene" name="phone">
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
                        <input type="text" class="form-control" id="municipio" name="municipio">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dirección</label>
                        <textarea class="form-control" id="direccion" rows="3" name="direccion"></textarea>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="fechaNacBene">Fecha de Jornada</label>
                        <input type="date" class="form-control" id="fechaJornada" name="fechaJornada">
                    </div>
                    <hr>
                    <input type="hidden" name="origen" value="4">
                    <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>