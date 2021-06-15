<?php
    include_once('../dataacces/Terceros.php');
    include_once('../Entidades/Terceros.php');
    if (isset($_POST['txtOperacion'])) {
        $operacion=$_POST['txtOperacion'];
        if ($operacion ==="Registrar") {
            $objclsTerceroData= new clsTerceroData();
            if ($objclsTerceroData->registrarTerceros(obtenerDatosFormulario())) {
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
        $objclsTerceroEntidad = new clsTerceroEntidad();
        if (isset($_POST['txtidTercero'])) {
            $objclsTerceroEntidad->setearIdentificacionTercero($_POST['txtidTercero']);
            if (isset($_POST['txtNombre'])) {
                $objclsTerceroEntidad->setearNombreTercero($_POST['txtNombre']);
                if (isset($_POST['txtEmail'])) {
                    $objclsTerceroEntidad->setearEmailTercero($_POST['txtEmail']);
                    if (isset($_POST['txtTelefono'])) {
                        $objclsTerceroEntidad->setearCelularTercero($_POST['txtTelefono']);
                        if (isset($_POST['txtDireccion'])) {
                            $objclsTerceroEntidad->setearDireccionTercero($_POST['txtDireccion']);
                            if (isset($_POST['txtDescripcion'])) {
                                $objclsTerceroEntidad->setearDescripcion($_POST['txtDescripcion']);
                                if (isset($_POST['txtContacto'])) {
                                    $objclsTerceroEntidad->setearContactoTercero($_POST['txtContacto']);
                                    return $objclsTerceroEntidad;
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