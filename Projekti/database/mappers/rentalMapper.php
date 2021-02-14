<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/databaseConnection.php');

class RentalMapper extends DatabasePDOConfiguration
{

    private $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getRentalById($rentalId)
    {
        $query = "SELECT * FROM rental WHERE rental_id =:id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $rentalId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getRentalByUserId($userId)
    {
        $query = "SELECT * FROM rental WHERE user_id =:id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getRentalByCarId($carId)
    {
        $query = "SELECT * FROM rental WHERE car_id =:id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $carId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAllRentals()
    {
        $query = "SELECT * FROM rental";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function insertRental($rental)
    {
        $query = "INSERT INTO rental(rental_date, return_date, pick_up_location, 
            drop_off_location, user_id, car_id, total) VALUES 
            (:rental_date, :return_date, :pick_up_location, :drop_off_location, :user_id, :car_id, :total)";

        $rentalDate = $rental->getRentalDate();
        $returnDate = $rental->getReturnDate();
        $pickUpLoc = $rental->getPickUpLocation();
        $dropOffLoc = $rental->getDropOffLocation();
        $userId = $rental->getUserId();
        $carId = $rental->getCarId();
        $total = $rental->getTotal();

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":rental_date", $rentalDate);
        $statement->bindParam(":return_date", $returnDate);
        $statement->bindParam(":pick_up_location", $pickUpLoc);
        $statement->bindParam(":drop_off_location", $dropOffLoc);
        $statement->bindParam(":user_id", $userId);
        $statement->bindParam(":car_id", $carId);
        $statement->bindParam(":total", $total);
        $statement->execute();
    }

    public function deleteRental($rentalId)
    {
        $query = "DELETE FROM rental WHERE rental_id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $rentalId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
