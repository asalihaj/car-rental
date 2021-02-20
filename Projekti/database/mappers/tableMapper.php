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

    private function getCars()
    {
        $mapper = new CarMapper();
        $cars = $mapper->getAllCars();
        for ($i = 0; $i < count($cars); $i++) {
            echo '<tr class="data-row" title="' . $cars[$i]['car_id'] . '">';
            foreach ($cars[$i] as $key => $value) {
                echo '<td title="' . $key . '">' . $value . '</td>';
            }
            echo '<td class="action">';
            $this->addActions($cars[$i]['car_id']);
            echo '</td>';
            echo '</tr>';
        }
    }

    private function getUsers()
    {
        $mapper = new UserMapper();
        $users = $mapper->getAllUsers();

        for ($i = 0; $i < count($users); $i++) {
            echo '<tr class="data-row" title="' . $users[$i]['user_id'] . '">';
            foreach ($users[$i] as $key => $value) {
                if (!strcmp($key, 'password') == 0) {
                    echo '<td title="' . $key . '">' . $value . '</td>';
                }
            }
            echo '<td class="action">';
            $this->addActions($users[$i]['user_id']);
            echo '</td>';
            echo '</tr>';
        }
    }

    private function getContacts()
    {
        $mapper = new ContactMapper();
        $contacts = $mapper->getAllContacts();
        for ($i = 0; $i < count($contacts); $i++) {
            echo '<tr class="data-row" title="' . $contacts[$i]['contact_id'] . '">';
            foreach ($contacts[$i] as $key => $value) {
                echo '<td title="' . $key . '">' . $value . '</td>';
            }
            echo '<td class="action">';
            echo '<div class="edit-elements">';
            echo '<img title="' . $contacts[$i]['contact_id'] .
                '" class="action-icon delete-icon" src="../icons/dashboard/trash.png" alt="Trash Icon" >';
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }
    }

    private function getRentals()
    {
        $mapper = new RentalMapper();
        $rentals = $mapper->getAllRentals();
        for ($i = 0; $i < count($rentals); $i++) {
            echo '<tr class="data-row" title="' . $rentals[$i]['rental_id'] . '">';
            foreach ($rentals[$i] as $key => $value) {
                echo '<td title="' . $key . '">' . $value . '</td>';
            }
            echo '<td class="action">';
            echo '<div class="edit-elements">';
            echo '<img title="' . $rentals[$i]['rental_id']
                . '" class="action-icon delete-icon" src="../icons/dashboard/trash.png" alt="Trash Icon" >';
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }
    }

    private function getServices()
    {
        $mapper = new ServiceMapper();
        $services = $mapper->getAllServices();
        for ($i = 0; $i < count($services); $i++) {
            echo '<tr class="data-row" title="' . $services[$i]['service_id'] . '">';
            foreach ($services[$i] as $key => $value) {
                echo '<td title="' . $key . '">' . $value . '</td>';
            }
            echo '<td class="action">';
            $this->addActions($services[$i]['service_id']);
            echo '</td>';
            echo '</tr>';
        }
    }

    private function addActions($dataType)
    {
        echo '<div class="edit-elements">';
        echo '<img title="' . $dataType . '" class="action-icon edit-icon" src="../icons/dashboard/edit.png" alt="Edit Icon">';
        echo '<img title="' . $dataType . '" class="action-icon delete-icon" src="../icons/dashboard/trash.png" alt="Trash Icon" >';
        echo '</div>';
    }
}
