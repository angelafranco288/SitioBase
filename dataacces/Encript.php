<?php
class clsEncript
{
    public function __construct()
    {
        if(!defined('METODO'))
        {
            define('METODO', 'AES-256-CBC');
            define('LLAVE', '$1t10');
            define('VECTOR', '202105');
        }        
    }

    public function encriptar($value)
    {
        $salida=FALSE;
        $llave = hash('sha512', LLAVE);
        $vector = substr(hash('sha512', VECTOR), 0, 16);
        $salida = openssl_encrypt($value, METODO, $llave, 0, $vector);
        $salida = base64_encode($salida);
        return $salida;
    }

    public function desencriptar($value)
    {
        $salida = FALSE;
        $llave = hash('sha512', LLAVE);
        $vector = substr(hash('sha512', VECTOR), 0, 16);
        $value = base64_decode($value);
        $salida = openssl_decrypt($value, METODO, $llave, 0, $vector);
        return $salida;
    }
}
?>