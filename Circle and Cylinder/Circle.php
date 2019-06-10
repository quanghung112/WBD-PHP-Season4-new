<?php


class Circle {
    public $name;
    public $radius;
    public $color;
    public function __construct($name,$radius,$color){
        $this->name=$name;
        $this->radius=$radius;
        $this->color=$color;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function tinhArea(){
        $areaCricle=pi()*$this->radius**2;
        return $areaCricle;
    }
    public function tinhPerimeter(){
        return pi() * $this->radius * 2;
    }
    public function toString(){
        return "$this->name: Radius is $this->radius; Color is $this->color";
    }
}