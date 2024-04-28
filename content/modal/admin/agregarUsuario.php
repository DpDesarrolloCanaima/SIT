<!-- Modal -->
<div class="modal fade" id="AgregarUsuario<?php echo $rowPersonas['cedula'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-add"></i> Crear Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="mb-3">
                <label for="serialBateria" class="form-label">Cedula</label>
                <input type="text" class="form-control" id="serialBateria" name="serialBateria">
            </div>
            <div class="mb-3">
                <label for="serialBateria" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="serialBateria" name="serialBateria">
            </div>
            <div class="mb-3">
                <label for="serialBateria" class="form-label">Correo Institucional</label>
                <input type="text" class="form-control" id="serialBateria" name="serialBateria">
            </div>
            <div class="mb-3">
                <label for="serialBateria" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="serialBateria" name="serialBateria">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-backspace-reverse"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>