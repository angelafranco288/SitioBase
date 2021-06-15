<?php
    session_start();
    include_once('adminDB.php');
    class clsConsultas
    {
        private $objConexion;
        public function __construct()
        {
            $this->objConexion= new clsAdminDB();
        }
        public function actualizarEliminarInsertar($sql){
            
            $conexion = $this->objConexion->conectar();
            $retorno = false;

            if ($conexion->query($sql)) {
                $retorno = true;
            }
            $this->objConexion->desconectar($conexion);
            return $retorno;
        }
        public function consultarUsuario($sql)
        {
            $perfil = null;
            $conexion = $this->objConexion->conectar();
            if ($conexion->query($sql)) {
                if (mysqli_num_rows($conexion->query($sql))==1) {
                    $datos = mysqli_fetch_array($conexion->query($sql));
                    $perfil = $datos['perfilUsuario'];
                    $_SESSION['sesion'] = $perfil;
                }
            }
            $this->objConexion->desconectar($conexion);
            return $perfil;
        }
        public function listar($mostrar)
        {
            $conexion = $this->objConexion->conectar();
            if ($conexion->query($mostrar)) {
                $conectar = $conexion->query($mostrar);
            }
            $this->objConexion->desconectar($conexion);
            return $conectar;
        }
    }
?>