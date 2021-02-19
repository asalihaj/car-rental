<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/databaseConnection.php');

class CarMapper extends DatabasePDOConfiguration
{

    private $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getCarById($carId)
    {
        $query = "SELECT * FROM car WHERE car_id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $carId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getCarByManufacturer($manufacturer)
    {
        $query = "SELECT * FROM car WHERE manufacturer = :manufacturer";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":manufacturer", $manufacturer);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCarByModel($model)
    {
        $query = "SELECT * FROM car WHERE model = :model";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":manufacturer", $model);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCarByTransimission($model)
    {
        $query = "SELECT * FROM car WHERE model = :model";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":manufacturer", $model);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllCars()
    {
        $query = "SELECT * FROM car";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function insertCar($car)
    {
        $query = "INSERT INTO car (manufacturer, model, color, production_year, 
            transmission, category, image, rental_rate, capacity, updated_by_user) VALUES 
            (:manufacturer, :model, :color, :production_year, :transmission, :category, :image, :rental_rate, :capacity, :user)";
        $manufacturer = $car->getManufacturer();
        $model = $car->getModel();
        $color = $car->getColor();
        $production_year = $car->getProductionYear();
        $transmission = $car->getTransmission();
        $category = $car->getCategory();
        $image = $car->getImage();
        $rental_rate = $car->getRentalRate();
        $capacity = $car->getCapacity();

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":manufacturer", $manufacturer);
        $statement->bindParam(":model", $model);
        $statement->bindParam(":color", $color);
        $statement->bindParam(":production_year", $production_year);
        $statement->bindParam(":transmission", $transmission);
        $statement->bindParam(":category", $category);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":rental_rate", $rental_rate);
        $statement->bindParam(":capacity", $capacity);
        $statement->bindParam(":user", $_SESSION['userId']);
        $statement->execute();
    }

    public function updateCar($car, $carId)
    {
        $query = 'UPDATE car 
                  SET manufacturer = :manufacturer,
                  model = :model,
                  color = :color,
                  production_year = :production_year,
                  transmission = :transmission,
                  category = :category,
                  image = :image,
                  rental_rate = :rental_rate,
                  capacity = :capacity,
                  updated_by_user = :user
                  WHERE car_id = :id';
        $manufacturer = $car->getManufacturer();
        $model = $car->getModel();
        $color = $car->getColor();
        $production_year = $car->getProductionYear();
        $transmission = $car->getTransmission();
        $category = $car->getCategory();
        $image = $car->getImage();
        $rental_rate = $car->getRentalRate();
        $capacity = $car->getCapacity();

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $carId);
        $statement->bindParam(":manufacturer", $manufacturer);
        $statement->bindParam(":model", $model);
        $statement->bindParam(":color", $color);
        $statement->bindParam(":production_year", $production_year);
        $statement->bindParam(":transmission", $transmission);
        $statement->bindParam(":category", $category);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":rental_rate", $rental_rate);
        $statement->bindParam(":capacity", $capacity);
        $statement->bindParam(":user", $_SESSION['userId']);
        $statement->execute();
    }

    public function deleteCar($carId)
    {
        $query = "DELETE FROM car WHERE car_id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $carId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
