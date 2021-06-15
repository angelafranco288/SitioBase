<?php
include_once('consultas.php');
class clsLoginData
{
    function consultar($info)
    {
        $objConsultas = new clsConsultas();

        $consulta = 'SELECT perfilUsuario FROM usuarios
        WHERE nombreUsuario = "'. $info->verUser() .'" AND clave="'.$info->verPass().'"';
        return $objConsultas->consultarUsuario($consulta);
    }
}
?>