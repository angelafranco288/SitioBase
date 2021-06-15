<?php
include_once('consultas.php');
class clsTercero
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
    }

    function mostrarTercero()
    {
        $mostar = "SELECT * FROM terceros";
        return $this->objConsultas->listar($mostar);
    }
}
?>