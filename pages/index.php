<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNIPIG | Principal</title>
    <?php
    include_once('Templates/head.php');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index.php" class="brand-link">
                <img src="../Images/logo.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-ligh">UNIPIG</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pd-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../Images/usuario.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div Class="info">
                        <a href="index.php" class="d-block">Usuario</a>
                    </div>
                </div>
            </div>
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
                <?php 
                include_once('../Entidades/loginEntidades.php');
                include_once('../dataacces/loginData.php');

                $objClsLogin = new clsLoginData();

                if (isset($_POST['Usuario']) && isset($_POST['Password'])) {
                    if ($objClsLogin->consultar(Capturar())==1) {
                        include_once('Templates/menuSuperUsuario.php');
                    }elseif ($objClsLogin->consultar(Capturar())==2) {
                        include_once('Templates/menuAdmin.php');
                    }elseif ($objClsLogin->consultar(Capturar())==3) {
                        include_once('Templates/menuVendedor.php');
                    }elseif ($objClsLogin->consultar(Capturar())==4) {
                        include_once('Templates/menuInventario.php');
                    }else {
                        header('Location:../');
                    }
                }
                if (isset($_SESSION['sesion'])) {
                    if ($_SESSION['sesion']==1) {
                        include_once('Templates/menuSuperUsuario.php');
                    }elseif ($_SESSION['sesion']==2) {
                        include_once('Templates/menuAdmin.php');
                    }elseif ($_SESSION['sesion']==3) {
                        include_once('Templates/menuVendedor.php');
                    }elseif ($_SESSION['sesion']==4) {
                        include_once('Templates/menuInventario.php');
                    }
                }
                function Capturar()
                {
                    $objClsLoginEntidad = new clsLoginEntidad();
                    if (isset($_POST['Usuario']) && isset($_POST['Password'])) {
                        $objClsLoginEntidad->capturaUser($_POST['Usuario']);
                        $objClsLoginEntidad->capturaPass($_POST['Password']);
                    }else {
                        echo "Error... Intente de Nuevo";
                    }
                    return $objClsLoginEntidad;
                }
                ?>
            </div>
        </aside>
        <div class="wrapper"></div>
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <?php
                            if (isset($_GET['MsgType'])) {
                                $tipoMensaje = $_GET['MsgType'];
                                $mensaje = isset($_GET['MsgValue']) ? $_GET['MsgValue'] : "";
                                if ($tipoMensaje === "Err") {
                                    echo "<div class='alert alert-danger alert-dismissible container-fluid' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h5><i class='icon fas fa-ban'></i>Error!</h5>" . $mensaje ."</div>";
                                }
                                if ($tipoMensaje === "Ext") {
                                    echo "div class='alert alert-success alert-dismissible container-fluid'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h5><i class='icon fas fa-check'></i>Operación Exitosa</h5>" . $mensaje ."</div>";
                                }
                            }
                            if (isset($_GET['Op'])) {
                                $opcion = $_GET['Op'];
                                if ($opcion==="RUser") {
                                    include_once('Usuario/Registar.php');
                                }
                                if ($opcion==="RProducts") {
                                    include_once('Productos/Registrar.php');
                                }
                                if ($opcion==="RClien") {
                                    include_once('Terceros/Registrar.php');
                                }
                                if ($opcion==="RProve") {
                                    include_once('Terceros/Registrar.php');
                                }
                                if ($opcion==="CProducts") {
                                    include_once('listarProductos.php');
                                }
                                if ($opcion==="CUser") {
                                    include_once('listarUsuario.php');
                                }
                                if ($opcion==="CClien") {
                                    include_once('listarTerceros.php');
                                }
                                if ($opcion==="CProvee") {
                                    include_once('listarTerceros.php');
                                }
  
                            }
                            ?>
                            
                            <div class="col-2">
                            </div>
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