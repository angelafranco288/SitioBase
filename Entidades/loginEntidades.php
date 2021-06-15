<?php
include_once('../dataacces/Encript.php');
    class clsLoginEntidad
    {
        private $user,$pass,$encriptar;
        function capturaUser($value)
        {
            $this->user = trim($value);
        }
        function capturaPass($value)
        {
            $encriptar = new clsEncript();
            $this->pass = $encriptar->encriptar($value);
        }
        function verUser()
        {
            return $this->user;
        }
        function verPass()
        {
            return $this->pass;
        }
    }
?>