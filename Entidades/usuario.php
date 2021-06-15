<?php
include_once('../dataacces/Encript.php');
class clsUsuarioEntidad
{
    private $NombreUsuario,$Identificacion,$PrimerNombre,$SegundoNombre,
    $Email,$celular,$Direccion,$PerfilUsuario,$PassUsuario,$EstadoUsuario,
    $FechaCreacion,$UsuarioModificacion,$FechaModificacion,$objClsEncript;

    public function __construct(){
        $this->objClsEncript = new clsEncript();
    }
    public function setearNombreUsuario($value){
        $this->NombreUsuario = trim($value);
    }
    public function setearIdentificacion($value){
        $this->Identificacion = trim($value);
    }
    public function setearPrimerNombre($value){
        $this->PrimerNombre = trim($value);
    }
    public function setearSegundoNombre($value){
        $this->SegundoNombre = trim($value);
    }
    public function setearPrimerApellido($value){
        $this->PrimerApellido = trim($value);
    }
    public function setearSegundoApellido($value){
        $this->SegundoApellido = trim($value);
    }
    public function setearEmail($value){
        $this->Email = trim($value);
    }
    public function setearCelular($value){
        $this->Celular = trim($value);
    }
    public function setearDireccion($value){
        $this->Direccion = trim($value);
    }
    public function setearPerfilUsuario($value){
        $this->PerfilUsuario = trim($value);
    }
    public function setearPassUsuario($value){
        if (is_null($value) || !isset($value) || (strlen($value)<=0)) {
            $this->PassUsuario = "";
        }else {
            $this->PassUsuario = $this->objClsEncript->encriptar(trim($value));
        }
    }
    public function setearUsuarioCreacion($value)
        {
            if (is_null($value) || !isset($value) || (strlen($value)<=0)) {
                $this->UsuarioCreacion="system";
            }
            else
            {
                $this->UsuarioCreacion = trim($value);
            }
        }
    public function setearEstadoUsuario($value){
        $this->EstadoUsuario = trim($value);
    }
    public function setearFechaCreacion($value){
        $this->FechaCreacion = trim($value);
    }
    public function setearUsuarioModificacion($value){
        $this->UsuarioModificacion = trim($value);
    }
    public function setearFechaModificacion($value){
        $this->FechaModificacion = trim($value);
    }
    public function obtenerNombreUsuario(){
        return $this->NombreUsuario;
    }
    public function obtenerIdentificacion(){
        return $this->Identificacion;
    }
    public function obtenerPrimerNombre(){
        return $this->PrimerNombre;
    }
    public function obtenerSegundoNombre(){
        return $this->SegundoNombre;
    }
    public function obtenerPrimerApellido(){
        return $this->PrimerApellido;
    }
    public function obtenerSegundoApellido(){
        return $this->SegundoApellido;
    }
    public function obtenerEmail(){
        return $this->Email;
    }
    public function obtenerCelular(){
        return $this->Celular;
    }
    public function obtenerDireccion(){
        return $this->Direccion;
    }
    public function obtenerPerfilUsuario(){
        return $this->PerfilUsuario;
    }
    public function obtenerPassUsuario(){
        return $this->PassUsuario;
    }
    public function obtenerEstadoUsuario(){
        return $this->EstadoUsuario;
    }
    public function obtenerFechaCreacion(){
        return $this->FechaCreacion;
    }
    public function obtenerUsuarioModificacion(){
        return $this->UsuarioModificacion;
    }
    public function obtenerFechaModificacion(){
        return $this->FechaModificacion;
    }
    public function obtenerUsuarioCreacion()
        {
            if (is_null($this->UsuarioCreacion) || !isset($this->UsuarioCreacion) || (strlen($this->UsuarioCreacion)<=0)) {
                return "system";
            }
            else
            {
               return $this->UsuarioCreacion;
            }
        }
}
?>