<?php
    include_once('../dataacces/usuariosData.php');
    include_once('../Entidades/usuario.php');
    if (isset($_POST['txtOperacion'])) {
        $operacion=$_POST['txtOperacion'];
        if ($operacion ==="Registrar") {
            $objClsUsuariosData = new clsUsuariosData();
            if ($objClsUsuariosData->registrarUsuario(obtenerDatosFormulario())) {
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
        $objClsUsuarioEntidad = new clsUsuarioEntidad();
        if (isset($_POST['txtnombreUsuario'])) {
            $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtnombreUsuario']);
            if (isset($_POST['txtid'])) {
                $objClsUsuarioEntidad->setearIdentificacion($_POST['txtid']);
                if (isset($_POST['txtprimerNombre'])) {
                    $objClsUsuarioEntidad->setearPrimerNombre($_POST['txtprimerNombre']);
                    if (isset($_POST['txtsegundoNombre'])) {
                        $objClsUsuarioEntidad->setearSegundoNombre($_POST['txtsegundoNombre']);
                        if (isset($_POST['txtprimerApellido'])) {
                            $objClsUsuarioEntidad->setearPrimerApellido($_POST['txtprimerApellido']);
                            if (isset($_POST['txtsegundoApellido'])) {
                                $objClsUsuarioEntidad->setearSegundoApellido($_POST['txtsegundoApellido']);
                                if (isset($_POST['txtcorreo'])) {
                                    $objClsUsuarioEntidad->setearEmail($_POST['txtcorreo']);
                                    if (isset($_POST['txtnumCelular'])) {
                                        $objClsUsuarioEntidad->setearCelular($_POST['txtnumCelular']);
                                        if (isset($_POST['txtDireccion'])) {
                                            $objClsUsuarioEntidad->setearDireccion($_POST['txtDireccion']);
                                            if (isset($_POST['txtclave'])) {
                                                $objClsUsuarioEntidad->setearPassUsuario($_POST['txtclave']);
                                                if (isset($_POST['cmbPerfil'])) {
                                                    $objClsUsuarioEntidad->setearPerfilUsuario($_POST['cmbPerfil']);
                                                    return $objClsUsuarioEntidad;
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