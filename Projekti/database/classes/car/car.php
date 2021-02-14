<?php


class Car
{
    private $manufacturer;
    private $model;
    private $color;
    private $category;
    private $transmission;
    private $productionYear;
    private $imgDir;
    private $rentalRate;
    private $capacity;

    public function __construct(
        $manufacturer,
        $model,
        $color,
        $category,
        $transmission,
        $productionYear,
        $imgDir,
        $rentalRate,
        $capacity
    ) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->color = $color;
        $this->category = $category;
        $this->transmission = $transmission;
        $this->productionYear = $productionYear;
        $this->imgDir = $imgDir;
        $this->rentalRate = $rentalRate;
        $this->capacity = $capacity;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getTransmission()
    {
        return $this->transmission;
    }

    public function getProductionYear()
    {
        return $this->productionYear;
    }

    public function getImgDir()
    {
        return $this->imgDir;
    }

    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }
}
