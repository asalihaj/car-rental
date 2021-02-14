<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/databaseConnection.php');

class ServiceMapper extends DatabasePDOConfiguration
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getServiceById($serviceId)
    {
        $query = "SELECT * FROM service WHERE service_id = :id";

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":service_id", $serviceId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getServiceByTitle($title)
    {
        $query = "SELECT * FROM service WHERE title LIKE '%:title%'";

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":title", $title);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAllServices()
    {
        $query = "SELECT * FROM service";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function insertService($service)
    {
        $query = "INSERT INTO service (title, description) VALUSE 
            (:title, :description)";

        $title = $service->getTitle();
        $description = $service->getDescription();

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->execute();
    }


    public function deleteService($serviceId)
    {
        $query = "DELETE FROM service WHERE service_id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $serviceId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
