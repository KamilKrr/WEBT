<?php
include_once "RealEstate.php";
class TrainingRoom extends RealEstate{

    private $sideLength;

    public function __construct($name, $price, $specialEquipment, $sideLength)
    {
        parent::__construct($name, $price, $specialEquipment);

        $this->sideLength = $sideLength;
    }

    public function getArea()
    {
        return 2 * (1 + sqrt(2)) * pow($this->sideLength, 2);
    }

    public function getDimensions()
    {
        return "Sidelength: ".$this->sideLength;
    }
}