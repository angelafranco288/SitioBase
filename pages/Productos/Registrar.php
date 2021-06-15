<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNIPIG | Registro Productos</title>
    <?php
    include_once('Templates/head.php');
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
                                    <h1 class="login-box-msg">Registrar Productos</h1>
                                    <form action="../business/Productos.php" method="POST">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Código del Producto" id="txtCodigo" name="txtCodigo" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-qrcode"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre Producto" id="txtNombre" name="txtNombre" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Descripción Producto" id="txtDescripcion" name="txtDescripcion" maxlength="200" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-book"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Unidad de Medida" id="txtUnidadMedida" name="txtUnidadMedida" maxlength="15">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-balance-scale"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Marca del Producto" id="txtMarca" name="txtMarca" maxlength="30" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Precio Actual" id="txtPrecio" name="txtPrecio" maxlength="15">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Cantidad Actual" id="txtCantidad" name="txtCantidad" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-balance-scale"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-block btn-success">Registrar Producto</button>
                                            <input type="hidden" name="txtOperacion" id="txtOperacion" value="Registrar">
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
        include_once('Templates/footer.php');
        ?>
    </div>
    <?php
    include_once('Templates/foot.php');
    ?>
</body>

</html>