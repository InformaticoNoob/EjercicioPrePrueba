<?php

class Producto
{
    
    var $nombre='';
    var $totalusd=0;
    var $año='';
    public $idproducto="";
    
    /*Constructor de la Clase */
    public function __construct($nombre="",$totalusd=0,$año='',$idproducto='') 
    {
        $this->nombre=$nombre;
        $this->totalusd=$totalusd;
        $this->año=$año;
        $this->idproducto=$idproducto;
    }
    
    
}