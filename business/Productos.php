<?php
    include_once('../dataacces/Productos.php');
    include_once('../Entidades/Productos.php');
    if (isset($_POST['txtOperacion'])) {
        $operacion=$_POST['txtOperacion'];
        if ($operacion ==="Registrar") {
            $objclsProductoData = new clsProductoData();
            if ($objclsProductoData->registrarProductos(obtenerDatosFormulario())) {
                $mensaje = "Se registro correctamente";
                header('Location:../pages/?MsgType=Ext&MsgValue='.urlencode($mensaje));
            }else {
                EnviarMensajeError();
            }
        }
    }else {
        $mensaje = "Ocurrió un error en la operación... </br> intenta nuevamente.";
        header('Location:../pages/?MsgType=Err&MsgValue=' . urlencode($mensaje));
        
    }
    function EnviarMensajeError()
    {
        $mensaje = "Error al ingresar";
        header('Location:../pages/?MsgType=Err&MsgValue='.urlencode($mensaje));

    }

    function obtenerDatosFormulario()
    {
        $objclsProductoEntidad = new clsProductoEntidad();
        if (isset($_POST['txtCodigo'])) {
            $objclsProductoEntidad->setearCodigoProducto($_POST['txtCodigo']);
            if (isset($_POST['txtNombre'])) {
                $objclsProductoEntidad->setearNombreProducto($_POST['txtNombre']);
                if (isset($_POST['txtDescripcion'])) {
                    $objclsProductoEntidad->setearDescripcionProducto($_POST['txtDescripcion']);
                    if (isset($_POST['txtUnidadMedida'])) {
                        $objclsProductoEntidad->setearUnidadMedida($_POST['txtUnidadMedida']);
                        if (isset($_POST['txtMarca'])) {
                            $objclsProductoEntidad->setearMarcaProducto($_POST['txtMarca']);
                            if (isset($_POST['txtPrecio'])) {
                                $objclsProductoEntidad->setearPrecioActual($_POST['txtPrecio']);
                                if (isset($_POST['txtCantidad'])) {
                                    $objclsProductoEntidad->setearCantidadActual($_POST['txtCantidad']);
                                    return $objclsProductoEntidad;
                                }else {
                                    EnviarMensajeError();
                                }
                            }else {
                                EnviarMensajeError();
                            }
                        }else {
                            EnviarMensajeError();
                        }
                    }else {
                        EnviarMensajeError();
                    }
                }else {
                    EnviarMensajeError();
                }
            }else {
                EnviarMensajeError();
            }
        }else {
            EnviarMensajeError();
        }
    }
?>