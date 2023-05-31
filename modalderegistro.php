<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Registrar Usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form name="crearusuario" action="registrodeusuario.php" method="POST" class="">
                                            <div class="form-group">
                                                <label for="exampleInputUser1">Usuario</label>
                                                <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="usuario">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUser1">Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="nombre">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Contraseña</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Cédula</label>
                                                <input type="text" class="form-control" id="exampleInputCedula1" name="cedula">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                                            </div>
                                            <div class="form-group">
                                                <label for="perfil">Perfil</label>
                                                <select name="perfil" id="" class="form-control form-control-lg">
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Presidencia</option>
                                                    <option value="3">Director de Area</option>
                                                    <option value="4">Gerente</option>
                                                    <option value="5">Supervisor de Linea</option>
                                                    <option value="6">Analista</option>
                                                    <option value="7">Técnico</option>
                                                    <option value="8">Verificador</option>
                                                </select>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                                            <button type="reset" class="btn btn-danger">Refrescar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
