<?php


class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    public function getXSpeed(){
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed){
        $this->xSpeed=$xSpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed){
        $this->ySpeed=$ySpeed;
    }
    public function getSpeed(){
        $arr=['xS'=>"$this->xSpeed",'yS'=>"$this->ySpeed"];
        return $arr;
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    public function toString()
    {
        return parent::toString().' '.var_dump($this->getSpeed()); // TODO: Change the autogenerated stub
    }
    public function Move(){
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
        return $this->x.$this->y;
    }
}