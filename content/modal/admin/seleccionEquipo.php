<!-- Modal -->
<div class="modal fade" id="SeleccionEquipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Seleccione el equipo del dia <i class="bi bi-easel2"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="updateArea">
            <div class="mb-3">
                <label for="Equipo" class="form-label">Area a designar</label>
                <select name="Equipo" id="Equipo" class="form-control form-control-lg">
                            <?php foreach ($resultadoEquipo as $rowEquipos) : ?>
                            <option value="<?php echo $rowEquipos['id_tipo_de_equipo']; ?>"><?php echo $rowEquipos['nombre']; ?>
                            </option>
                            <?php endforeach; ?>
                </select>
            </div>
            <input type="hidden" name="fechaEquipo" id="fechaEquipo" value="<?php echo $fecha;?>">
        </form>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" onclick="SeleccionEquipo()" value="Guardar">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-backspace-reverse"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>