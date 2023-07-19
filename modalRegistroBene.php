<!-- Modal -->
<div class="modal fade" id="modalBene" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Registrar Beneficiario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form name="crearusuario" action="registroDeBene.php" method="POST" class="">
                                        <div class="form-group">
                                            <label for="exampleInputUser1">IC</label>
                                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="ic" pattern="[a-zA-z0-9]">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Nombre del Beneficiario</label>
                                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="nombre_del_beneficiario" pattern="[a-zA-Z]{4,30}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Cédula</label>
                                            <input type="text" class="form-control" id="exampleInputCedula1" name="cedula" pattern="[0-9]">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Edad</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="edad" pattern="[0-9]">
                                        </div>
                                        <div class="form-group">
                                            <label for="genero">Genero</label>
                                            <select name="genero" id="" class="form-control form-control-lg">
                                                <?php foreach ($resultado2 as $row2) : ?>
                                                    <option value="<?php echo $row2['id_genero']; ?>"><?php echo $row2['genero']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" name="fecha_de_nacimiento">
                                        </div>
                                        <div class="form-group">
                                            <label for="area">Area</label>
                                            <select name="area" id="" class="form-control form-control-lg">
                                                <?php foreach ($resultado3 as $row3) : ?>
                                                    <option value="<?php echo $row3['id_area']; ?>"><?php echo $row3['nombre_del_area']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cargo">Cargo</label>
                                            <select name="cargo" id="" class="form-control form-control-lg">
                                                <?php foreach ($resultado4 as $row4) : ?>
                                                    <option value="<?php echo $row4['id_cargo']; ?>"><?php echo $row4['tipo_de_cargo']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nombre del Representante</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="nombre_del_representante" pattern="[a-zA-Z]">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" pattern="[a-zA-Z@.]">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Telefono</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" pattern="[0-9-]">
                                        </div>
                                        <div class="form-group">
                                            <label for="area">Estado</label>
                                            <select name="estado" id="" class="form-control form-control-lg">
                                                <?php foreach ($resultado7 as $row7) : ?>
                                                    <option value="<?php echo $row7['id_estados']; ?>"><?php echo $row7['estado_nombre']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Municipio</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="municipio" pattern="[a-zA-Z.]">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Dirección</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="direccion" pattern="[a-zA-Z0-9.]"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Posee Alguna Discapacidad o Condición</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="discapacidad_o_condicion" id="exampleRadios1" value="si" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="discapacidad_o_condicion" id="exampleRadios2" value="no">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Descripción De Discapacidad o Condición</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion_discapacidad" pattern="[a-zA-Z0-9]"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="tipo_De_equipo">Tipo de Equipo</label>
                                            <select name="tipo_de_equipo" id="" class="form-control form-control-lg">
                                                <?php foreach ($resultado5 as $row5) : ?>
                                                    <option value="<?php echo $row5['id_tipo_de_equipo']; ?>"><?php echo $row5['nombre']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="origen">Origen</label>
                                            <select name="origen" id="" class="form-control form-control-lg">
                                                <?php foreach ($resultado6 as $row6) : ?>
                                                    <option value="<?php echo $row6['id_origen']; ?>"><?php echo $row6['origen']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary" name="registrar">Enviar</button>
                                        <button type="reset" class="btn btn-secondary">Refrescar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
