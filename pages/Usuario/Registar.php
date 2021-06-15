<div class="card-body register-card-body">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <h1 class="login-box-msg">Registrar usuario</h1>
                                    <form action="../business/usuarios.php" method="POST">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre usuario" id="txtnombreUsuario" name="txtnombreUsuario" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Identificacion" id="txtid" name="txtid" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-credit-card"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer nombre" id="txtprimerNombre" name="txtprimerNombre" maxlength="30" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo nombre" id="txtsegundoNombre" name="txtsegundoNombre" maxlength="30">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer apellido" id="txtprimerApellido" name="txtprimerApellido" maxlength="30" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo apellido" id="txtsegundoApellido" name="txtsegundoApellido" maxlength="30">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Correo" id="txtcorreo" name="txtcorreo" maxlength="70" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nùmero de celular" id="txtnumCelular" name="txtnumCelular" maxlength="15" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-mobile"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" row=3 placeholder="Direcciòn" id="txtDireccion" name="txtDireccion" maxlength="300"></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-map-pin"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Clave" id="txtclave" name="txtclave" maxlength="15" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Perfil</label>
                                            <select class="form-control select2" style="width: 100%;" id="cmbPerfil" name="cmbPerfil">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Inventario</option>
                                                <option value="3">Vendedor</option>
                                                <option value="4">Super usuario</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-block btn-success">Registrarse</button>
                                            <input type="hidden" id="txtOperacion" name="txtOperacion" value="Registrar">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                        </div>