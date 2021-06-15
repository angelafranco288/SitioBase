<?php

include('../Entidades/configuracion.php');
include('../dataacces/ConfiguracionData.php');

if(isset($_POST['txtServidor']))
{
    echo 'Se recuperó el servidor: '.$_POST['txtServidor'].' <br />';
}else
{
    echo 'No se recuperó el servidor<br />';
}
if(isset($_POST['txtBaseDeDatos']))
{
    echo 'Se recuperó la Base de Datos: '.$_POST['txtBaseDeDatos'].' <br />';
}else
{
    echo 'No se recuperó la Base de Datos<br />';
}
if(isset($_POST['txtUsuario']))
{
    echo 'Se recuperó el Usuario: '.$_POST['txtUsuario'].' <br />';
}else
{
    echo 'No se recuperó el Usuario<br />';
}
if(isset($_POST['txtPassword']))
{
    echo 'Se recuperó el Password: '.$_POST['txtPassword'].' <br />';
}else
{
    echo 'No se recuperó el Password<br />';
}
$objclasConfiguracionEntidad = new clsConfiguracionEntidad();
$objclasConfiguracionEntidad->setearServidor($_POST['txtServidor']);
$objclasConfiguracionEntidad->setearBaseDeDatos($_POST['txtBaseDeDatos']);
$objclasConfiguracionEntidad-> setearUsuario($_POST['txtUsuario']);
$objclasConfiguracionEntidad-> setearPassword($_POST['txtPassword']);
/*echo 'Valor almacenado:('.$objclasConfiguracionEntidad->obtenerServidor().')<br />';
echo 'Valor almacenado:('.$objclasConfiguracionEntidad->obtenerBaseDeDatos().')<br />';
echo 'Valor almacenado:('.$objclasConfiguracionEntidad->obtenerUsuario().')<br />';
echo 'Valor almacenado:('.$objclasConfiguracionEntidad->obtenerPassword().')<br />';*/

$objclsConfiguracion=new clsConfiguracion();
$objclsConfiguracion->actualizarArchivo($objclasConfiguracionEntidad);

?>

=======
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
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
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 629fbc7 (commit configuracion de la base de datos, head, footer y formulario para el registro de usuario)
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
