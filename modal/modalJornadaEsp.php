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
                        <input type="text" class="form-control" id="inputAddress" name="ic">
                    </div>

                    <div class="form-row">
                        <!-- <label for="inputState">Ingrese</label> -->
                        <div class="form-group col-md-4">
                            <label for="inputState">Tipo De Documento</label>
                            <select id="inputState" class="form-control" name="tipo_documento">
                                <?php foreach ($resultado14 as $row14) : ?>
                                <option value="<?php echo $row14['id_documento'];?>">
                                    <?php echo $row14['tipo_documento'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Ingresar</label>
                            <input type="text" class="form-control" id="cedula" name="cedulaBene">
                            <span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre_bene">Nombre de la institucion</label>
                        <input type="text" class="form-control" id="nombre_bene" name="nombre_del_beneficiario">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="edadBene">Nª De Jornada</label>
                        <input type="text" class="form-control" id="edadBene" name="edadBene">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="fechaNacBene">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacBene" name="fecha_de_nacimiento">
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
                    <hr>
                    <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>