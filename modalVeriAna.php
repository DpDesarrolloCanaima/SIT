
<!-- <div class="modal fade" id="entregarDispo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-titlen text-dark mx-auto" id="title-head-modal">Entrega Dispositivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="fechaEntrega">Fecha de Entrega</label>
                        <input type="date" class="form-control" id="fechaEntrega" name="fecha_de_entrega">
                    </div>
                    <input type="hidden" name="id_status" value="4">
                    <input type="hidden" name="responsable" value="<?php echo $id_usuario;?>">
                    <input type="hidden" name="id_roles" value="<?php echo $rol;?>">
                    <input type="hidden" name="id_dispositivo" value="<?php echo $rowde['id_datos_del_dispositivo']?>">
                    <hr>
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div> -->


<div class="modal fade" id="entregarDispo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-titlen text-dark mx-auto" id="title-head-modal">Registrar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="crearusuario" action="registrodeusuario.php" method="POST" class="">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" aria-describedby="nameHelp"
                            name="usuario">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp"
                            name="nombre">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp"
                            name="correo">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="perfil">Perfil</label>
                        <select name="perfil" id="perfil" class="form-control form-control-lg">
                            <?php 
                                foreach($resultado1 as $row1):
                            ?>
                            <option value="<?php echo $row1['id_roles'];?>">
                                <?php echo $row1['roles'];?>
                            </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>