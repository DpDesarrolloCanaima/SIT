<!-- Modal -->
<div class="modal fade" id="RegistrarPersona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Persona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="registroPersona">
            <div class="mb-3">
                <label for="cedula" class="form-label">Cedula</label>
                <input type="text" class="form-control" id="cedula" name="cedula">
            </div>
            <div class="mb-3">
                <label for="nombre_completo" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_completo" name="nombre_completo">
            </div>
            <div class="mb-3">
                <label for="correoInst" class="form-label">Correo Institucional</label>
                <input type="text" class="form-control" id="correoInst" name="correoInst">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Guardar</button> -->
        <input type="submit" class="btn btn-success" onclick="RegistrarPersona()" value="Guardar"> <i class="bi bi-check-circle-fill"></i>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-backspace-reverse"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>