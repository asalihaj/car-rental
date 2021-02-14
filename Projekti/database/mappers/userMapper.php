<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/databaseConnection.php');

class UserMapper extends DatabasePDOConfiguration
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $query = "SELECT * FROM user WHERE user_id=:id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM user WHERE username=:username";

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM user WHERE email = :email";

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM user";

        $statement = $this->connection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function insertUser($user)
    {
        $query = "INSERT INTO user(username, email, password, role) VALUES (:username, :email, :password, :role)";

        $username = $user->getUsername();
        $email = $user->getEmail();
        $pass = $user->getPassword();
        $password = password_hash($pass, PASSWORD_BCRYPT);
        $role = $user->getRole();

        $statement = $this->connection->prepare($query);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($userId)
    {
        $query = "DELETE FROM user WHERE user_id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
