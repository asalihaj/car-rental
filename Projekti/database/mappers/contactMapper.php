<?php
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/databaseConnection.php');

class ContactMapper extends DatabasePDOConfiguration
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getContactById($contactId)
    {
        $query = "SELECT * FROM contact WHERE contact_id=:id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $contactId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getContactByTitle($title)
    {
        $query = "SELECT * FROM contact WHERE LOWER(title) like '%:title%'";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":title", $title);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAllContacts()
    {
        $query = "SELECT * FROM contact";

        $statement = $this->connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function insertContactForm($contactForm)
    {
        $query = "INSERT INTO contact(name, email, message) VALUES (:name, :email, :message)";

        $name = $contactForm->getName();
        $email = $contactForm->getEmail();
        $message = $contactForm->getMessage();

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":message", $message);
        $statement->execute();
    }

    public function deleteContactForm($contactId)
    {
        $query = "DELETE FROM cotact WHERE contact_id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $contactId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
