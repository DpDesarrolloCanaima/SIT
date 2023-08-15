
<div class="modal fade" id="entregarDispo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-titlen text-dark mx-auto" id="title-head-modal">Entrega Dispositivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="entregar.php" method="POST">
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
</div>