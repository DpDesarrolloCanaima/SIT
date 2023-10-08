<!-- Modal -->
<div class="modal fade" id="modalBene" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="agregarBene">Registrar Beneficiario</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form  action="registroDeBene.php" method="POST">
                    <div class="form-group">
                        <label for="inputAddress">IC</label>
                        <input type="text" class="form-control" id="inputAddress" name="ic">
                    </div>
                    <div class="form-group">
                    <label for="inputAddress">Ingrese la cedula</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">C.I</div>
                            </div>
                            <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" name="documento">
                            <input type="hidden" name="tipo_documento" value="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre_bene">Nombre del Beneficiario</label>
                        <input type="text" class="form-control" id="nombre_bene" name="nombre_del_beneficiario">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="edadBene">Edad</label>
                        <input type="text" class="form-control" id="edadBene" name="edadBene">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <select name="genero" id="genero" class="form-control form-control-lg">
                            <?php foreach ($resultado2 as $row2) : ?>
                            <option value="<?php echo $row2['id_genero']; ?>"><?php echo $row2['genero']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fechaNacBene">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacBene" name="fecha_de_nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="nombreRepre">Nombre del Representante</label>
                        <input type="text" class="form-control" id="nombreRepre" name="nombre_del_representante">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="correoBene">Correo</label>
                        <input type="email" class="form-control" id="correoBene" aria-describedby="emailHelp"
                            name="correoBene">
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="direccion"></textarea>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Posee Alguna Discapacidad o Condición</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="discapacidad_o_condicion"
                                id="exampleRadios1" value="si" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="discapacidad_o_condicion"
                                id="exampleRadios2" value="no">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Descripción De Discapacidad o Condición</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="descripcion_discapacidad"></textarea>
                        <span></span>
                    </div>
                    <hr>
                    <input type="hidden" name="origen" value="2">
                    <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>