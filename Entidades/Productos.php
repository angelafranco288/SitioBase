<?php
include_once('../dataacces/Encript.php');
class clsProductoEntidad
{
    private $codigoProducto,$nombreProducto,$descripcionProducto,$unidadMedida,
    $marcaProducto,$precioActual,$cantidadActual,$estadoProducto,$usuarioCreacion,$fechaCreacion,
    $usuarioModificacion,$fechaModificacion;

    public function __construct(){
        $this->objClsEncript = new clsEncript();
    }
    public function setearCodigoProducto($value){
        $this->codigoProducto = trim($value);
    }
    public function setearNombreProducto($value){
        $this->nombreProducto = trim($value);
    }
    public function setearDescripcionProducto($value){
        $this->descripcionProducto = trim($value);
    }
    public function setearUnidadMedida($value){
        $this->unidadMedida = trim($value);
    }
    public function setearMarcaProducto($value){
        $this->marcaProducto = trim($value);
    }
    public function setearPrecioActual($value){
        $this->precioActual = trim($value);
    }
    public function setearCantidadActual($value){
        $this->cantidadActual = trim($value);
    }
    public function setearEstadoProducto($value){
        $this->estadoProducto = trim($value);
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
    public function obtenerCodigoProducto(){
        return $this->codigoProducto;
    }
    public function obtenerNombreProducto(){
        return $this->nombreProducto;
    }
    public function obtenerDescripcionProducto(){
        return $this->descripcionProducto;
    }
    public function obtenerUnidadMedida(){
        return $this->unidadMedida;
    }
    public function obtenerMarcaProducto(){
        return $this->marcaProducto;
    }
    public function obtenerPrecioActual(){
        return $this->precioActual;
    }
    public function obtenerCantidadActual(){
        return $this->cantidadActual;
    }
    public function obtenerEstadoProducto(){
        return $this->estadoProducto;
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