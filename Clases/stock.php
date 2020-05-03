<?php
Class Stock
{
 public $_producto;
 public $_marca;
 public $_precio;
 public $_stock;
 public $_foto;


 
 public function __construct($producto,$marca,$precio,$stock,$foto)
 {
     $this->_producto = $producto;
     $this->_marca = $marca;
     $this->_precio = $precio;
     $this->_stock = $stock;
     $this->_foto = $foto;
     
 }

}
?>