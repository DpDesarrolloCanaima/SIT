<!-- Modal -->
<div class="modal fade" id="CambiarArea<?php echo $rowPersonas['cedula'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar area de : <?php echo $rowPersonas['nombre'];?>  <i class="bi bi-repeat"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="registroPersona">
            <div class="mb-3">
                <label for="serialBateria" class="form-label">Area a designar</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">Aduana</option>
                    <option value="2">Registrador</option>
                    <option value="3">Ensamblador</option>
                </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" onclick="RegistrarPersona()" value="Guardar"> <i class="bi bi-check-circle-fill"></i>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-backspace-reverse"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>