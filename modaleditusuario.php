
<!-- Modal de editar información del usuario -->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Registrar
                    Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
	    </div>

            <div class="modal-body">
                <form name="crearusuario" action="" method="POST" class="FormularioAjax" autocomplete="off"
                    data-form="save">
                    <div class="form-group">
                        <label for="exampleInputUser1">Usuario</label>
                        <input type="text" class="form-control" id="usuario" aria-describedby="nameHelp"
			name="nombre" value = "<?php echo $usuarioEdit;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp"
                            name="nombre" value = "<?php echo $nombre;?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" value = "<?php echo $password;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value = "<?php echo $cedula;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp"
                            name="correo" value = "<?php echo $correo;?>">
                    </div>
                    <div class="form-group">
                        <label for="perfil">Perfil</label>
			<select name="perfil" id="perfil" class="form-control form-control-lg">
				 <option select disabled>
                                <?php echo $id_roles;?>
                            </option>
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
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
