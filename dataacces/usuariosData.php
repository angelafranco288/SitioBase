<?php
    include_once('consultas.php');
    class clsUsuariosData
    {
        private $objConsultas;
        public function __construct()
        {
            $this->objConsultas = new clsConsultas();
        }
        public function registrarUsuario($datos)
        {
            echo "error".$datos->obtenerIdentificacion();
            $sql="INSERT INTO usuarios(nombreUsuario, Identificacion, primerNombre, 
            segundoNombre, primerApellido, segundoApellido, Email, celular, direccion, 
            perfilUsuario, clave, estadoUsuario, usuarioCreacion, fechaCreacion)VALUES
            ('".$datos->obtenerNombreUsuario()."','".$datos->obtenerIdentificacion()."',
            '".$datos->obtenerPrimerNombre()."','".$datos->obtenerSegundoNombre()."','".$datos->obtenerPrimerApellido()."',
            '".$datos->obtenerSegundoApellido()."','".$datos->obtenerEmail()."','".$datos->obtenerCelular()."',
            '".$datos->obtenerDireccion()."','".$datos->obtenerPerfilUsuario()."','".$datos->obtenerPassUsuario()."',1,
            '".$datos->obtenerUsuarioCreacion()."',NOW())";

            return $this->objConsultas->actualizarEliminarInsertar($sql);
        }
    }
?>
