<?php
include_once('consultas.php');
class clsUsuario
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
    }

    function mostrarUsuario()
    {
        $mostar = "SELECT * FROM usuarios";
        return $this->objConsultas->listar($mostar);
    }
}
?>