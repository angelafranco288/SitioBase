<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
class clsConfiguracion
{
    private $nombre= null, $ruta= null, $rutaCompleta =null;
    
    public function __construct()
    {
        echo 'Ejecuta Constructor</br>';
        $this->ruta = '../dataacces/';
        $this->nombre = 'config.txt';
        $this->generarRutaCompleta();
=======
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
include_once('../Entidades/Configuracion.php');
class clsConfiguracion
{

    private $nombre = null, $ruta = null, $rutaCompleta = null;

    public function __construct()
    {
        $this->ruta = '../dataacces/';
        $this->nombre = 'config.txt';
        $this->generarRutaCompleta();       
<<<<<<< HEAD
=======
>>>>>>> 629fbc7 (commit configuracion de la base de datos, head, footer y formulario para el registro de usuario)
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
    }

    private function generarRutaCompleta()
    {
        $this->rutaCompleta = $this->ruta.$this->nombre;
<<<<<<< HEAD
=======
<<<<<<< HEAD
    }
    
    public function actualizarArchivo($objClasConfiguracionEntidad)
    {
        if ($this->validarExistenciaArchivo()) {
            echo '</b>metodo dice si';
            $this->CambiarArchivo($objClasConfiguracionEntidad);
        }
        else {
            echo '</b>metodo dice no';
=======
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
    } 

    public function actualizarArchivo($objClasConfiguracionEntidad)
    {
        if($this->validarExistenciaArchivo())
        {
            $this->modificarArchivo($objClasConfiguracionEntidad);
        }
        else
        {
<<<<<<< HEAD
=======
>>>>>>> 629fbc7 (commit configuracion de la base de datos, head, footer y formulario para el registro de usuario)
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
            $this->crearArchivo($objClasConfiguracionEntidad);
        }
    }

    private function validarExistenciaArchivo()
    {
        if(file_exists($this->rutaCompleta))
        {
<<<<<<< HEAD
=======
<<<<<<< HEAD
            echo'El Archivo: '.$this->nombre.'Existente en la ruta: '.$this->ruta;
            return true;
        }
        else {
            echo'El Archivo: '.$this->nombre.'No existe en la ruta: '.$this->ruta;
=======
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
            return true;
        }
        else
        {
<<<<<<< HEAD
=======
>>>>>>> 629fbc7 (commit configuracion de la base de datos, head, footer y formulario para el registro de usuario)
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
            return false;
        }
    }

    private function crearArchivo($objClasConfiguracionEntidad)
    {
        $archivo = fopen($this->rutaCompleta, "w+b");
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if($archivo == false)
        {
            echo '</br> Error al intentar crear el archivo';
        }
        else{
            echo 'Se crea el archivo correctamente';
            fwrite($archivo, "Servidor: ".$objClasConfiguracionEntidad->obtenerServidor()."\r\n");
            fwrite($archivo, "BaseDeDatos: ".$objClasConfiguracionEntidad->obtenerBaseDeDatos()."\r\n");
            fwrite($archivo, "Usuario: ".$objClasConfiguracionEntidad->obtenerUsuario()."\r\n");
            fwrite($archivo, "Password: ".$objClasConfiguracionEntidad->obtenerPassword()."\r\n");
=======
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
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
<<<<<<< HEAD
=======
>>>>>>> 629fbc7 (commit configuracion de la base de datos, head, footer y formulario para el registro de usuario)
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
        }

        fclose($archivo);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    private function CambiarArchivo ($objClasConfiguracionEntidad){
        $arrayDatosCargados = $objClasConfiguracionEntidad->CargarDatos();

        for ($i=0; $i < count($arrayDatosCargados) ; $i++) { 
            
            $arrayLinea = file($this->rutaCompleta);
            
            for ($j=0; $j < count($arrayLinea) ; $j++) { 
                $Dato = $arrayLinea[$j];
                $Buscar = strpos($Dato,$arrayDatosCargados[$i]);

                if ($Buscar !==false) {
                    array_splice($arrayLinea,$j,1);
                }
            }
            $archivo = fopen($this->rutaCompleta,"w+b");
            foreach ($arrayLinea as $Dato) {
                fwrite ($archivo,$Dato);
            }
            fwrite($archivo,$arrayDatosCargados[$i].":".$objClasConfiguracionEntidad->ObtenerValor($i).PHP_EOL);
            fclose ($archivo);
        }
    }

   

=======
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
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
<<<<<<< HEAD
=======
>>>>>>> 629fbc7 (commit configuracion de la base de datos, head, footer y formulario para el registro de usuario)
>>>>>>> 1d06a70 (commit de registro terceros y registro productos)
}
?>