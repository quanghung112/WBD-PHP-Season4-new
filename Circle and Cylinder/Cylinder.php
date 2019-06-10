<?php

include_once "Circle.php";
class Cylinder extends Circle {
    public $height;
    public function __construct($name, $radius, $color,$height)
    {
        parent::__construct($name, $radius, $color);
        $this->height=$height;
    }
    public function tinhThetich(){
        $areaCir=$this->tinhArea();
        return $this->height*$areaCir;
    }
    public function toString()
    {
         return "$this->name: Radius is $this->radius; Color is $this->color;Height is $this->height";
    }
}