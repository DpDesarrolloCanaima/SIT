<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#exampleModal"> Registrar Beneficiario</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#modalDispo"> Registrar Dispositivo</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Beneficiario</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IC</th>
                            <th>Nombre del Beneficiario</th>
                            <th>Cedula</th>
                            <th>Edad</th>
                            <th>Genero</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Unidad de Adscripción</th>
                            <th>Area</th>
                            <th>Cargo</th>
                            <th>Nombre del Representante</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Estado</th>
                            <th>Municipio</th>
                            <th>Dirección</th>
                            <th>Posee Discapacidad o Condición</th>
                            <th>Descripcion de Discapacidad</th>
                            <th>Tipo de dispositivo</th>
                            <th>Modelo</th>
                            <th>Origen</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = $resultado->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['ic']; ?></td>
                            <td><?php echo $row['nombre_del_beneficiario']; ?></td>
                            <td><?php echo $row['cedula']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <td><?php echo $row['genero']; ?></td>
                            <td><?php echo $row['fecha_de_nacimiento']; ?></td>
                            <td><?php echo $row['unidad_de_adscripcion']; ?></td>
                            <td><?php echo $row['nombre_del_area']; ?></td>
                            <td><?php echo $row['tipo_de_cargo']; ?></td>
                            <td><?php echo $row['nombre_del_representante']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['estado_nombre']; ?></td>
                            <td><?php echo $row['municipio']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['posee_discapacidad_o_condicion']; ?></td>
                            <td><?php echo $row['descripcion_discapacidad_condicion']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['modelo']; ?></td>
                            <td><?php echo $row['origen']; ?></td>
                            <td>
                            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editarBeneModal"
                                    data-bs-id="<?php echo $row8['id_datos_del_entregante']?>">Modificar</a>
                            </td>
                        </tr>
                        <?php
                                        
                   
                    include "modalRegistroBene.php";

                    include "modalEditBene.php";
                    
                                        }
                                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal de registro -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#modalDispo"> Registrar Dispositivo</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Dispositivos</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tipo de Dispositivo</th>
                            <th>Modelo</th>
                            <th>Serial del Equipo</th>
                            <th>Serial del Cargador</th>
                            <th>Institucion Educativa</th>
                            <th>Institucion Educativa (Donde estudia)</th>
                            <th>Grado</th>
                            <th>Fecha de Recepción</th>
                            <th>Estado de Recepción Del Equipo</th>
                            <th>Equipo Reincidio</th>
                            <th>Motivo de Reincidencia</th>
                            <th>Observaciones</th>
                            <th>Origen</th>
                            <th>Estatus</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row8 = $resultado8->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row8['nombre']; ?></td>
                            <td><?php echo $row8['modelo']; ?></td>
                            <td><?php echo $row8['serial_equipo']; ?></td>
                            <td><?php echo $row8['serial_de_cargador']; ?></td>
                            <td><?php echo $row8['institucion_educativa']; ?></td>
                            <td><?php echo $row8['institucion_donde_estudia']; ?></td>
                            <td><?php echo $row8['grado']; ?></td>
                            <td><?php echo $row8['fecha_de_recepcion']; ?></td>
                            <td><?php echo $row8['estado']; ?></td>
                            <td><?php echo $row8['equipo_reincidio']; ?></td>
                            <td><?php echo $row8['tipo_de_motivo']; ?></td>
                            <td><?php echo $row8['observaciones']; ?></td>
                            <td><?php echo $row8['origen']; ?></td>
                            <td><?php echo $row8['estatus']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editarModal"
                                    data-bs-id="<?php echo $row8['id_datos_del_dispositivo']?>">Modificar</a>
                            </td>
                        </tr>
                        <?php
                            };
                        ?>
                    </tbody>
                </table>
                <?php  
                    include "modalDeRegistroDis.php";
                    include "modalEditDis.php";
                ?>
            </div>
        </div>
    </div>

</div>
</div>
    
<script>
    let editarModal = document.getElementById('editarModal');
    editarModal.addEventListener('shown.bs.modal', event=>{
        let button = event.relatedTarget
        let id = button.getAttribute('data-bs-id')

        let inputId = editarModal.querySelector('.modal-body #id_datos_del_dispositivo')
        let inputTipoDeDispositivo = editarModal.querySelector('.modal-body #tipo_de_equipo')
        let inputSerialDeEquipo = editarModal.querySelector('.modal-body #serial_del_equipo')
        let inputSerialCargador = editarModal.querySelector('.modal-body #serial_cargador')
        let inputInstitucionRecepcion = editarModal.querySelector('.modal-body #institucion_educativa')
        let inputInstitucionDondeEstudia = editarModal.querySelector('.modal-body #institucion_donde_estudia')
        let inputGrado = editarModal.querySelector('.modal-body #grado')
        let inputFechaRecepcion = editarModal.querySelector('.modal-body #fecha_de_recepcion')
        let inputEstadoRecepcion = editarModal.querySelector('.modal-body #estado_recepcion')
        let inputReincidio = editarModal.querySelector('.modal-body #equipo_reincidio')
        let inputReincidio2 = editarModal.querySelector('.modal-body #equipo_reincidio2')
        let inputFalla = editarModal.querySelector('.modal-body #falla')
        let inputObservaciones = editarModal.querySelector('.modal-body #observaciones')
        let inputCargo = editarModal.querySelector('.modal-body #cargo')
        let inputOrigen = editarModal.querySelector('.modal-body #origen')
        let inputStatus = editarModal.querySelector('.modal-body #estatus')
        let inputBeneficiario = editarModal.querySelector('.modal-body #beneficiario')
        let inputRoles = editarModal.querySelector('.modal-body #id_roles')

        let url = "getDispositivo.php";
        let formData = new FormData()

        formData.append('id_datos_del_dispositivo', id)

        fetch(url,{
            method: "POST",
            body: formData
        }).then(response => response.json())
        .then(data => {
            inputId.value = data.id_datos_de_dispositivo
            
            inputTipoDeDispositivo.value = data.tipo_de_equipo
            
            inputSerialDeEquipo.value = data.serial_del_equipo

            inputSerialCargador.value = data.serial_cargador
            
            inputInstitucionRecepcion.value = data.institucion_educativa

            inputInstitucionDondeEstudia.value = data.institucion_donde_estudia

            inputGrado.value = data.grado

            inputFechaRecepcion.value = data.fecha_de_recepcion
            
            inputEstadoRecepcion.value = data.estado_recepcion

            inputReincidio.value = data.equipo_reincidio

            inputReincidio2.value = data.equipo_reincidio2

            inputFalla.value = data.falla

            inputObservaciones.value = data.observaciones

            inputCargo.value = data.cargo

            inputOrigen.value = data.origen

            inputStatus.value = data.estatus

            inputBeneficiario.value = data.beneficiario

            inputRoles.value = data.id_roles

        }).catch(err => console.log(err))
    })
</script>

<!-- End of Main Content -->