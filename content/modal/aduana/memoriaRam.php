<div class="modal fade" id="RegistroDeMemoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Memoria Ram</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="registrarMemoriaRam">
            <div class="mb-3">
                <label for="serialMemoriaRam" class="form-label">Serial de Memoria Ram</label>
                <input type="text" class="form-control" id="serialMemoriaRam" name="serialMemoriaRam">
            </div>
            <div class="mb-3">
              <label for="fecha_registro">Fecha de registro</label>
              <p><?php echo $fechaActual;?></p>
              <input type="hidden" name="fecha_actual" id="fecha_actual" value="<?php echo $fechaActual;?>">
            </div>
            <button type="submit">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-backspace-reverse"></i> Cerrar</button>
        <button type="submit">Enviar</button>
      </div>
    </div>
  </div>
</div>