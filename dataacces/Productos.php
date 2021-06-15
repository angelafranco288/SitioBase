<?php
    include_once('consultas.php');
    class clsProductoData
    {
        private $objConsultas;
        public function __construct()
        {
            $this->objConsultas = new clsConsultas();
        }
        public function registrarProductos($datos)
        {
            $sql="INSERT INTO productos(codigoProducto, nombreProducto, descripcionProducto,
            unidadMedida,marcaProducto,precioActual,cantidadActual,estadoProducto,usuarioCreacion,
            fechaCreacion)VALUES
            ('".$datos->obtenerCodigoProducto()."','".$datos->obtenerNombreProducto()."',
            '".$datos->obtenerDescripcionProducto()."','".$datos->obtenerUnidadMedida()."','".$datos->obtenerMarcaProducto()."',
            '".$datos->obtenerPrecioActual()."','".$datos->obtenerCantidadActual()."','".$datos->obtenerEstadoProducto()."',
            '".$datos->obtenerFechaCreacion()."',NOW())";

            return $this->objConsultas->actualizarEliminarInsertar($sql);
        }
    }
?>