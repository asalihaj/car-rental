<?php

class Rental
{
    private $rentalDate;
    private $returnDate;
    private $pickUpLocation;
    private $dropOffLocation;
    private $userId;
    private $carId;
    private $total;

    public function __construct(
        $rentalDate,
        $returnDate,
        $pickUpLocation,
        $dropOffLocation,
        $userId,
        $carId,
        $total
    ) {
        $this->rentalDate = $rentalDate;
        $this->returnDate = $returnDate;
        $this->pickUpLocation = $pickUpLocation;
        $this->dropOffLocation = $dropOffLocation;
        $this->userId = $userId;
        $this->carId = $carId;
        $this->total = $total;
    }

    public function getRentalDate()
    {
        return $this->rentalDate;
    }

    public function getReturnDate()
    {
        return $this->returnDate;
    }

    public function getPickUpLocation()
    {
        return $this->pickUpLocation;
    }

    public function getDropOffLocation()
    {
        return $this->dropOffLocation;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getCarId()
    {
        return $this->carId;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function verify()
    {
        $currentDate = date('Y-m-d');
        if (
            $currentDate <= $this->rentalDate
            && $this->rentalDate < $this->returnDate
        ) {
            return true;
        } else {
            return false;
        }
    }
}
