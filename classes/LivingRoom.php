<?php
include_once "RealEstate.php";
class LivingRoom extends RealEstate{

    private $length;
    private $width;
    private $height;

    public function __construct($name, $price, $specialEquipment, $length, $width, $height)
    {
        parent::__construct($name, $price, $specialEquipment);

        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }


    public function getDimensions()
    {
        return "Length: ".$this->length.", Width: ".$this->width.", Height: ".$this->height;
    }
}