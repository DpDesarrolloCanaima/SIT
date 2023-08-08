<!-- Modal -->

<?php
    require "config/conexionProvi.php";

    $sql = "SELECT e.id_datos_del_entregante, e.ic, e.nombre_del_beneficiario, e.cedula, e.edad, e.fecha_de_nacimiento, e.nombre_del_representante, e.correo, e.telefono, e.municipio, e.direccion, e.posee_discapacidad_o_condicion, e.descripcion_discapacidad_condicion, t.nombre, t.modelo, g.genero, a.nombre_del_area, c.tipo_de_cargo, o.origen, v.estado_nombre FROM datos_del_entregante AS e 
    INNER JOIN tipo_de_equipo AS t ON t.id_tipo_de_equipo=e.id_tipo_de_equipo
    INNER JOIN genero AS g ON  g.id_genero=e.id_genero
    INNER JOIN area AS a ON a.id_area = e.id_area
    INNER JOIN cargo AS c ON c.id_cargo = e.id_cargo
    INNER JOIN origen AS o ON o.id_origen = e.id_origen
    INNER JOIN estados_venezuela AS v ON v.id_estados = e.estado ";
    
    $result = mysqli_query($mysqli, $sql);
    
    while ($row2 = $result->fetch_assoc()) {
        $idBeneEdit = $row['id_datos_del_entregante'];
        $icEdit = $row['ic']; 
        $nombreBeneEdit = $row['nombre_del_beneficiario'];    
        $cedulaBeneEdit = $row['cedula']; 
        $edadBeneEdit = $row['edad']; 
        $fechaDeNacimiento = $row['fecha_de_nacimiento'];
        $nombreDeAreaEdit = $row['nombre_del_area'];
        $tipodeCargo = $row['tipo_de_cargo']; 
        $nombreDeRepresentanteEdit = $row['nombre_del_representante']; 
        $correoEdit = $row['correo']; 
        $telefonoEdit =  $row['telefono']; 
        $municipioEdit = $row['municipio']; 
        $direccionEdit = $row['direccion'];
        $DiscapacidadEdit = $row['posee_discapacidad_o_condicion'];
        $descripcionEdit =  $row['descripcion_discapacidad_condicion']; 
        echo '
        <div class="modal fade" id="editarBeneModal'.$idBeneEdit.'" tabindex="-1" aria-labelledby="editarBeneModalLabel" aria-hidden="true">
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
                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp"
                                name="ic" value= "'.$icEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUser1">Nombre del Beneficiario</label>
                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp"
                                name="nombre_del_beneficiario" value="'.$nombreBeneEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Cédula</label>
                            <input type="text" class="form-control" id="exampleInputCedula1" name="cedula" value="'.$cedulaBeneEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="text" class="form-control" id="edad" name="edad" value= "'.$edadBeneEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="fechaDeNacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fechaDeNacimiento" name="fecha_de_nacimiento" value="'.$fechaDeNacimiento.'">
                        </div>
                        <div class="form-group">
                            <label for="nombreRepresentante">Nombre del Representante</label>
                            <input type="text" class="form-control" id="nombreRepresentante"
                                name="nombre_del_representante" value="'.$nombreDeRepresentanteEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="correoEdit">Correo</label>
                            <input type="email" class="form-control" id="correoEdit" aria-describedby="emailHelp"
                                name="correo" value="'.$correoEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="phone" value="'.$telefonoEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Municipio</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="municipio" value="'.$municipioEdit.'">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <textarea class="form-control" id="direccion" rows="3" name="direccion" value="'.$direccionEdit.'"></textarea>
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
                            <label for="descipcion">Descripción De Discapacidad o Condición</label>
                            <textarea class="form-control" id="descripcion" rows="3"
                                name="descripcion_discapacidad" value = "'.$descripcionEdit.'"></textarea>
                        </div>
                        <input type="hidden" name = "idEdit" value = "'.$idEdit.'">
                        <hr>
                        <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                        <button type="reset" class="btn btn-danger">Refrescar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        ';
    }
    ?>