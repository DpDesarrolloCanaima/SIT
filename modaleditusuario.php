<?php
require "config/conexionProvi.php" ;
if($_GET['id']){
    $id = $_GET['id'];
    $conex = $mysqli;
    $sql = "SELECT * FROM usuarios WHERE id_usuarios ='" . $id . "'";
    $resultado3 = mysqli_query($conex, $sql);

    $row3 = mysqli_fetch_assoc($resultado3);
	
	$usuarioEdit = $row3['usuario'];
	$nombreEdit = $row3['nombre'];
	$cedulaEdit = $row3['cedula'];
	$passwordEdit = $row3['password'];
	$correoEdit = $row3['correo'];
	$id_rolesEdit = $row3['id_roles'];
	
	mysqli_close($conex);


?>
<!-- Modal de editar información del usuario -->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Editar
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
                        <input type="text" class="form-control" id="usuario" aria-describedby="nameHelp" name="nombre"
                            value="<?php echo $row3['usuario'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp" name="nombre"
                            value="<?php echo $row3['nombre'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password"
                            value="<?php echo $row3['password'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula"
                            value="<?php echo $row3['cedula'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="correo"
                            value="<?php echo $row3['correo'];?>">
                    </div>
                    <div class="form-group">
                        <label for="perfil">Perfil</label>
                        <select name="perfil" id="perfil" class="form-control form-control-lg">
                            <option select disabled>
                                <?php echo $row3['id_roles'];?>
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
<?php
}
?>