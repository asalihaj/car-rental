<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/userMapper.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/contactMapper.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/rentalMapper.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/serviceMapper.php');

class TableQuery
{
    private $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    public function getData()
    {
        switch ($this->table) {
            case "users":
                $this->getUsers();
                break;
            case "cars":
                $this->getCars();
                break;
            case "contact":
                return $this->getContacts();
                break;
            case "rental":
                return $this->getRentals();
                break;
            case "service":
                return $this->getServices();
                break;
        }
    }

    public function getCars()
    {
        $mapper = new CarMapper();
        $cars = $mapper->getAllCars();
        for ($i = 0; $i < count($cars); $i++) {
            echo '<tr class="data-row">';
            echo '<td>' . $cars[$i]['car_id'] . '</td>';
            echo '<td>' . $cars[$i]['manufacturer'] . '</td>';
            echo '<td>' . $cars[$i]['model'] . '</td>';
            echo '<td>' . $cars[$i]['color'] . '</td>';
            echo '<td>' . $cars[$i]['production_year'] . '</td>';
            echo '<td>' . $cars[$i]['transmission'] . '</td>';
            echo '<td>' . $cars[$i]['category'] . '</td>';
            echo '<td>' . $cars[$i]['image'] . '</td>';
            echo '<td>' . $cars[$i]['rental_rate'] . '</td>';
            echo '<td>' . $cars[$i]['capacity'] . '</td>';
            echo '<td>' . $cars[$i]['last_update'] . '</td>';
            echo '<td>' . $cars[$i]['updated_by_user'] . '</td>';
            echo '<td>' . '[Action]' . '</td>';
            echo '</tr>';
        }
    }

    public function getUsers()
    {
        $mapper = new UserMapper();
        $users = $mapper->getAllUsers();
        for ($i = 0; $i < count($users); $i++) {
            echo '<tr class="data-row">';
            echo '<td>' . $users[$i]['user_id'] . '</td>';
            echo '<td>' . $users[$i]['username'] . '</td>';
            echo '<td>' . $users[$i]['email'] . '</td>';
            echo '<td>' . $users[$i]['role'] . '</td>';
            echo '<td>' . '[Action]' . '</td>';
            echo '</tr>';
        }
    }

    public function getContacts()
    {
        $mapper = new ContactMapper();
        $contacts = $mapper->getAllContacts();
        for ($i = 0; $i < count($contacts); $i++) {
            echo '<tr class="data-row">';
            echo '<td>' . $contacts[$i]['contact_id'] . '</td>';
            echo '<td>' . $contacts[$i]['name'] . '</td>';
            echo '<td>' . $contacts[$i]['email'] . '</td>';
            echo '<td>' . $contacts[$i]['message'] . '</td>';
            echo '<td>' . $contacts[$i]['last_update'] . '</td>';
            echo '<td>' . '[Action]' . '</td>';
            echo '</tr>';
        }
    }

    public function getRentals()
    {
        $mapper = new RentalMapper();
        $rentals = $mapper->getAllRentals();
        for ($i = 0; $i < count($rentals); $i++) {
            echo '<tr class="data-row">';
            echo '<td>' . $rentals[$i]['rental_id'] . '</td>';
            echo '<td>' . $rentals[$i]['rental_date'] . '</td>';
            echo '<td>' . $rentals[$i]['return_date'] . '</td>';
            echo '<td>' . $rentals[$i]['pick_up_location'] . '</td>';
            echo '<td>' . $rentals[$i]['drop_off_location'] . '</td>';
            echo '<td>' . $rentals[$i]['user_id'] . '</td>';
            echo '<td>' . $rentals[$i]['car_id'] . '</td>';
            echo '<td>' . $rentals[$i]['total'] . '</td>';
            echo '<td>' . $rentals[$i]['last_update'] . '</td>';
            echo '<td>' . '[Action]' . '</td>';
            echo '</tr>';
        }
    }

    public function getServices()
    {
        $mapper = new ServiceMapper();
        $services = $mapper->getAllServices();
        for ($i = 0; $i < count($services); $i++) {
            echo '<tr class="data-row">';
            echo '<td>' . $services[$i]['service_id'] . '</td>';
            echo '<td>' . $services[$i]['title'] . '</td>';
            echo '<td>' . $services[$i]['description'] . '</td>';
            echo '<td>' . $services[$i]['last_update'] . '</td>';
            echo '<td>' . $services[$i]['updated_by_user'] . '</td>';
            echo '<td>' . '[Action]' . '</td>';
            echo '</tr>';
        }
    }
}
