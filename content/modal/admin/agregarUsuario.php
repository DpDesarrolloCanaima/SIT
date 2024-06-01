<!-- Modal -->
<div class="modal fade" id="AgregarUsuario<?php echo $rowPersonas['cedula'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-add"></i> Crear Usuario a: <?php echo $rowPersonas['nombre'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="AgregarUsuario">
            <div class="mb-3">
                <label for="Usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="Usuario" name="Usuario">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contrasena</label>
                <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario">
            </div>
            <div class="mb-3">
              <label for="tipo_De_equipo">Tipo de Equipo</label>
              <select name="area" id="area" class="form-control form-control-lg">
                            <?php foreach ($resultadoPerfiles as $rowPerfiles) : ?>
                            <option value="<?php echo $rowPerfiles['id_perfil']; ?>"><?php echo $rowPerfiles['tipo']; ?>
                            </option>
                            <?php endforeach; ?>
                </select>
            </div>
            <input type="hidden" name="cedulaUsuario" id="cedulaUsuario" value="<?php echo $rowPersonas['cedula'];?>">
        </form>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" onclick="RegistrarUsuario()" value="Guardar"> <i class="bi bi-check-circle-fill"></i>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-backspace-reverse"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>