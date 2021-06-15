<?php
    include_once('consultas.php');
    class clsTerceroData
    {
        private $objConsultas;
        public function __construct()
        {
            $this->objConsultas = new clsConsultas();
        }
        public function registrarTerceros($datos)
        {
            $sql="INSERT INTO terceros(IdentificacionTercero,nombreTercero,emailTercero,
            celularTercero,direccionTercero,descripcion,estadoTercero,esCliente,esProveedor,
            contactoTercero,usuarioCreacion,fechaCreacion)VALUES
            ('".$datos->obtenerIdentificacionTercero()."','".$datos->obtenerNombreTercero()."',
            '".$datos->obtenerEmailTercero()."','".$datos->obtenerCelularTercero()."','".$datos->obtenerDireccionTercero()."',
            '".$datos->obtenerDescripcion()."',1,1,1,'".$datos->obtenerContactoTercero()."',
            '".$datos->obtenerUsuarioCreacion()."',NOW())";

            return $this->objConsultas->actualizarEliminarInsertar($sql);
        }
    }
?>