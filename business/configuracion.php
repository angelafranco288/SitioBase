<?php
include_once('../Entidades/configuracion.php');
include_once('../dataacces/configuracionData.php');
if(!isset($_POST['txtServidor']))
{
   echo 'No Se recuperó el Servidor<br />';
}
if(!isset($_POST['txtBaseDeDatos']))
{
    echo 'No Se recuperó la base de datos<br />';
}
if(!isset($_POST['txtUsuario']))
{
    echo 'No Se recuperó el Usuario<br />';
}
if(!isset($_POST['txtPassWord']))
{
    echo 'No Se recuperó el password<br />';
}

$objClasConfiguracionEntidad = new clsConfiguracionEntidad();
$objClasConfiguracionEntidad->setearServidor($_POST['txtServidor']);
$objClasConfiguracionEntidad->setearBasedeDatos($_POST['txtBaseDeDatos']);
$objClasConfiguracionEntidad->setearUsuario($_POST['txtUsuario']);
$objClasConfiguracionEntidad->setearClave($_POST['txtPassWord']);

$objClsConfiguracion = new clsConfiguracion();
$objClsConfiguracion->actualizarArchivo($objClasConfiguracionEntidad);
?>