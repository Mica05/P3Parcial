<?php
Class Usuario
{
    
    public $_nombre;
    public $_dni;
    public $_obraSocial;
    public $_clave;
    public $_tipo;

    public function __construct($nombre,$dni,$obrasocial,$clave,$tipo)
    {
        $this->_nombre = $nombre;
        $this->_dni = $dni;
        $this->_obraSocial = $obrasocial;
        $this->_clave = $clave;
        $this->_tipo = $tipo;
        
    }
//getters
    public function getNombre()
    {
        return $this->_nombre;
    }

    public function getDni()
    {
        return $this->_dni;
    }

    public function getObraSocial()
    {
        return $this->_obraSocial;
    }

    public function getClave()
    {
        return $this->_clave;
    }

    public function getTipo()
    {
        return $this->_tipo;
    }

//tostring
    public function tostring()
    {
        return $this->_nombre."-".$this->_dni."-".$this->_tipo."-".$this->_obraSocial."-".$this->_clave;
    }


?>