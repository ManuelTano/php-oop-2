<?php
class Product
{
    protected $brand;
    protected $price;
    protected $description;

    public function __construct($_brand, $_price, $_description)
    {
        $this->brand = $_brand;
        $this->price = $_price;
        $this->description = $_description;
    }

    public function setBrand($_brand)
    {
        $this->brand = $_brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDescription($_description)
    {
        $this->description = $_description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
