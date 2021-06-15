<?php
include_once('ConfiguracionData.php');
class clsAdminDB
{
    private $conexion =null;
    public function __construct()
    {   if (!defined('DB_SERVER')) {
        $objConfiguracionData = new clsConfiguracion();
        $datosConexion = $objConfiguracionData->leerConfiguracion();
        define('DB_SERVER',$datosConexion->obtenerServidor());
        define('DB_NAME',$datosConexion->obtenerBasedeDatos());
        define('DB_USER',$datosConexion->obtenerUsuario());
        define('DB_PASS',$datosConexion->obtenerClave());
        }
    }
    public function conectar()
    {
        $conexion=new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        if ($conexion->connect_errno) {
            die('Error de conexión: '.$mysqli->connect_errno);
        }
        return $conexion;
    }

    public function desconectar($conexion)
    {
        mysqli_close($conexion);
    }

}
?>