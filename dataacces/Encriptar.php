<?php

class clsEncriptar
{
    public function __construct()
    {
        if (!defined ('METODO')) {
            define ('METODO','AES-256-CBC');
            define ('LLAVE','Angela');
            define ('VECTOR','1234');

        }
    }

    public function Encriptar($value)
    {
        $valor=false;
        $LLAVE=hash('sha512',LLAVE);
        $VECTOR=substr(hash('sha512',VECTOR),0,16);
        $valor=openssl_encrypt($value,METODO,$LLAVE,0,$VECTOR);
        return $valor;

    }
}
?>