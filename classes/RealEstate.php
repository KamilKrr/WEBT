<?php
abstract class RealEstate{
    protected $name;
    protected $price;
    protected $specialEquipment;

    public function __construct($name, $price, $specialEquipment)
    {
        $this->name = $name;
        $this->price = $price;
        $this->specialEquipment = $specialEquipment;

        array_push($this->specialEquipment, "Stein");
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSpecialEquipment()
    {
        return join(", ", $this->specialEquipment);
    }

    public function getSpecialEquipmentAsArray()
    {
        return $this->specialEquipment;
    }

    public abstract function getArea();
    public abstract function getDimensions();

}