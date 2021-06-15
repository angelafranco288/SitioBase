<?php
include_once('../dataacces/Encript.php');
class clsTerceroEntidad
{
    private $IdentificacionTercero,$nombreTercero,$emailTercero,$celularTercero,
    $direccionTercero,$descripcion,$estadoTercero,$contactoTercero,$usuarioCreacion,$fechaCreacion,
    $usuarioModificacion,$fechaModificacion;

    public function __construct(){
        $this->objClsEncript = new clsEncript();
    }
    public function setearIdentificacionTercero($value){
        $this->IdentificacionTercero = trim($value);
    }
    public function setearNombreTercero($value){
        $this->nombreTercero= trim($value);
    }
    public function setearEmailTercero($value){
        $this->emailTercero = trim($value);
    }
    public function setearCelularTercero($value){
        $this->celularTercero = trim($value);
    }
    public function setearDireccionTercero($value){
        $this->direccionTercero = trim($value);
    }
    public function setearDescripcion($value){
        $this->descripcion = trim($value);
    }
    public function setearEstadoTercero($value){
        $this->estadoTercero = trim($value);
    }
    public function setearContactoTercero($value){
        $this->contactoTercero = trim($value);
    }
    public function setearUsuarioCreacion($value)
        {
            if (is_null($value) || !isset($value) || (strlen($value)<=0)) {
                $this->usuarioCreacion="system";
            }
            else
            {
                $this->usuarioCreacion = trim($value);
            }
        }
    public function setearFechaCreacion($value){
        $this->fechaCreacion = trim($value);
    }
    public function setearUsuarioModificacion($value){
        $this->usuarioModificacion = trim($value);
    }
    public function setearFechaModificacion($value){
        $this->fechaModificacion = trim($value);
    }
    public function obtenerIdentificacionTercero(){
        return $this->IdentificacionTercero;
    }
    public function obtenerNombreTercero(){
        return $this->nombreTercero;
    }
    public function obtenerEmailTercero(){
        return $this->emailTercero;
    }
    public function obtenerCelularTercero(){
        return $this->celularTercero;
    }
    public function obtenerDireccionTercero(){
        return $this->direccionTercero;
    }
    public function obtenerDescripcion(){
        return $this->descripcion;
    }
    public function obtenerEstadoTercero(){
        return $this->estadoTercero;
    }
    public function obtenerContactoTercero(){
        return $this->contactoTercero;
    }
    public function obtenerFechaCreacion(){
        return $this->fechaCreacion;
    }
    public function obtenerUsuarioModificacion(){
        return $this->usuarioModificacion;
    }
    public function obtenerFechaModificacion(){
        return $this->fechaModificacion;
    }
    public function obtenerUsuarioCreacion()
        {
            if (is_null($this->usuarioCreacion) || !isset($this->usuarioCreacion) || (strlen($this->usuarioCreacion)<=0)) {
                return "system";
            }
            else
            {
               return $this->usuarioCreacion;
            }
        }
}
?>