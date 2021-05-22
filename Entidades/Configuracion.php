<?php
include_once('../dataacces/Encript.php');
class clsConfiguracionEntidad
{
    private $Servidor, $BasedeDatos, $Usuario, $Clave, $objClsEncript, $valoresCargados;

    public function __construct()
    {
        $this->objClsEncript = new clsEncript();
    }

    public function setearServidor($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value) <= 0))
        {
            $this->Servidor = null;
        }
        else
        {
            $this->Servidor = $this->objClsEncript->encriptar(trim($value));
        }        
    }

    public function setearBasedeDatos($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value) <= 0))
        {
            $this->BasedeDatos = null;
        }
        else
        {
            $this->BasedeDatos = $this->objClsEncript->encriptar(trim($value));
        }
    }

    public function setearUsuario($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value) <= 0))
        {
            $this->Usuario = null;
        }
        else
        {
            $this->Usuario = $this->objClsEncript->encriptar(trim($value));
        }
    }

    public function setearClave($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value) <= 0))
        {
            $this->Clave = null;
        }
        else
        {
            $this->Clave = $this->objClsEncript->encriptar(trim($value));
        }
    }

    public function obtenerServidor()
    {
        return $this->Servidor;
    }

    public function obtenerBasedeDatos()
    {
        return $this->BasedeDatos;
    }

    public function obtenerUsuario()
    {
        return $this->Usuario;
    }

    public function obtenerClave()
    {
        return $this->Clave;
    }

    public function obtenerDatosCargados()
    {
        $datosCargados = array();
        $this->valoresCargados = array();
        if(!is_null($this->Servidor))
        {
            $datosCargados [] = "Server";
            $this->valoresCargados [] = $this->Servidor;
        }
        if(!is_null($this->BasedeDatos))
        {
            $datosCargados [] = "BD";
            $this->valoresCargados [] = $this->BasedeDatos;
        }
        if(!is_null($this->Usuario))
        {
            $datosCargados [] = "User";
            $this->valoresCargados [] = $this->Usuario;
        }
        if(!is_null($this->Clave))
        {
            $datosCargados [] = "Pass";
            $this->valoresCargados [] = $this->Clave;
        }
        return $datosCargados;
    }

    public function obtenerValorCargado($indice)
    {
        return $this->valoresCargados [$indice];
    }

    public function decriptServidor($value)
    {
        $this->Servidor = $this->objClsEncript->desencriptar(trim($value));
    }

    public function decriptBasedeDatos($value)
    {
        $this->BasedeDatos = $this->objClsEncript->desencriptar(trim($value));
    }

    public function decriptUsuario($value)
    {
        $this->Usuario = $this->objClsEncript->desencriptar(trim($value));
    }

    public function decriptClave($value)
    {
        $this->Clave = $this->objClsEncript->desencriptar(trim($value));
    }

}
?>