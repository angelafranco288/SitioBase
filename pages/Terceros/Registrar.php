<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNIPIG | Registro Terceros</title>
    <?php
    include_once('../Templates/head.php');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="card-body register-card-body">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <h1 class="login-box-msg">Registrar Terceros</h1>
                                    <form action="../business/configuracion.php" method="POST">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Identificación" id="txtidTercero" name="txtidTercero" maxlength="12" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre Completo" id="txtNombre" name="txtNombre" maxlength="255" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" id="txtEmail" name="txtEmail" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Teléfono" id="txtTelefono" name="txtTelefono" maxlength="13">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-mobile"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Dirección" id="txtDireccion" name="txtDireccion" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Descripción" id="txtDescripcion" name="txtDescripcion" maxlength="200">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-book"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Contacto" id="txtContacto" name="txtContacto" maxlength="200" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-block btn-success">Registrarse</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <?php
        include_once('../Templates/footer.php');
        ?>
    </div>
    <?php
    include_once('../Templates/foot.php');
    ?>
</body>

</html>