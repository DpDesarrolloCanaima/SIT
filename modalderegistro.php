<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<!-- Modal -->
<div class="modal fade" id="registrarUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-titlen text-dark mx-auto" id="title-head-modal">Registrar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="registrodeusuario.php" method="POST">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" pattern="[a-zA-Z]{4,15}" maxlength="15">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" pattern="[a-z-A-Z\s]">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" pattern="[a-zA-Z0-9]{8,16}" title="La contraseña debe ser de minimo 8 digitos, solo se permiten mayusculas, minusculas y numeros">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" pattern="[0-9]{8}">
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo">
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
</html>