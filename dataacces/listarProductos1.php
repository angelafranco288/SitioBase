<?php
include_once('consultas.php');
class clsProducto
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
    }

    function mostrarProducto()
    {
        $mostar = "SELECT * FROM productos";
        return $this->objConsultas->listar($mostar);
    }
}
?>