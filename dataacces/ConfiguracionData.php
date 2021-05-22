<?php
include_once('../Entidades/Configuracion.php');
class clsConfiguracion
{

    private $nombre = null, $ruta = null, $rutaCompleta = null;

    public function __construct()
    {
        $this->ruta = '../dataacces/';
        $this->nombre = 'config.txt';
        $this->generarRutaCompleta();       
    }

    private function generarRutaCompleta()
    {
        $this->rutaCompleta = $this->ruta.$this->nombre;
    } 

    public function actualizarArchivo($objClasConfiguracionEntidad)
    {
        if($this->validarExistenciaArchivo())
        {
            $this->modificarArchivo($objClasConfiguracionEntidad);
        }
        else
        {
            $this->crearArchivo($objClasConfiguracionEntidad);
        }
    }

    private function validarExistenciaArchivo()
    {
        if(file_exists($this->rutaCompleta))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    private function crearArchivo($objClasConfiguracionEntidad)
    {
        $archivo = fopen($this->rutaCompleta, "w+b");
        if($archivo === false)
        {
            echo '</br>Error al intentar crear el archivo';
        }
        else
        {
            echo 'se crea el archivo correctamente';
            fwrite($archivo, "Server:".$objClasConfiguracionEntidad->obtenerServidor()."\r\n");
            fwrite($archivo, "BD:".$objClasConfiguracionEntidad->obtenerBasedeDatos()."\r\n");
            fwrite($archivo, "User:".$objClasConfiguracionEntidad->obtenerUsuario()."\r\n");
            fwrite($archivo, "Pass:".$objClasConfiguracionEntidad->obtenerClave());
        }

        fclose($archivo);
    }

    private function modificarArchivo($objClasConfiguracionEntidad)
    {
       $arrayDatosCargados = $objClasConfiguracionEntidad->obtenerDatosCargados();
        for ($i=0; $i < count($arrayDatosCargados); $i++) {
            $arrayLineasArchivo = file($this->rutaCompleta);

            for ($j=0; $j < count($arrayLineasArchivo) ; $j++) { 
                $linea = $arrayLineasArchivo[$j];
                $pos = strpos($linea, $arrayDatosCargados[$i]);
                if($pos !== false)
                {
                    array_splice($arrayLineasArchivo, $j, 1);
                }
            }

            $archivo = fopen($this->rutaCompleta, "w+b");
            foreach($arrayLineasArchivo as $linea)
            {
                fwrite($archivo, $linea);
            }
            fwrite($archivo, "\r\n".$arrayDatosCargados[$i].":".$objClasConfiguracionEntidad->obtenerValorCargado($i));
            fclose($archivo);
        }
    }

    public function leerConfiguracion()
    {
        $objClasConfiguracionEntidad = new clsConfiguracionEntidad();
        $arrayLineasArchivo = file($this->rutaCompleta);
        for ($j=0; $j < count($arrayLineasArchivo) ; $j++) { 
            $linea = $arrayLineasArchivo[$j];
            $pos = strpos($linea, "Server");
            if($pos !== false)
            {
                $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                if(count($caracteres) >= 2)
                {
                    $objClasConfiguracionEntidad->decriptServidor($caracteres[1]);
                }                
            }
            else
            {
                $pos = strpos($linea, "BD");
                if($pos !== false)
                {
                    $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                    if(count($caracteres) >= 2)
                    {
                        $objClasConfiguracionEntidad->decriptBasedeDatos($caracteres[1]);
                    }
                }
                else
                {
                    $pos = strpos($linea, "User");
                    if($pos !== false)
                    {
                        $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                        if(count($caracteres) >= 2)
                        {
                            $objClasConfiguracionEntidad->decriptUsuario($caracteres[1]);
                        }                        
                    }
                    else
                    {
                        $pos = strpos($linea, "Pass");
                        if($pos !== false)
                        {
                            $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                            if(count($caracteres) >= 2)
                            {
                                $objClasConfiguracionEntidad->decriptClave($caracteres[1]);
                            }
                        }
                    }

                }
            }
                        
        }

        return $objClasConfiguracionEntidad;
    }
}
?>