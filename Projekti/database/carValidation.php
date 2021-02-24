<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/classes/car/car.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');

if (isset($_POST['car-add'])) {
    $carValidation = new CarValidation($_POST);
    $carValidation->verify(0);
    header('Location:../dashboard/dashboard.php?data=cars');
} else if (isset($_POST['car-edit'])) {
    $carValidation = new CarValidation($_POST);
    $carValidation->verify(1);
    header('Location:../dashboard/dashboard.php?data=cars');
} else {
    header('Location:../dashboard/dashboard.php?data=cars');
}

class CarValidation
{

    private $carId;
    private $manufacturer;
    private $model;
    private $color;
    private $prodYear;
    private $transmission;
    private $category;
    private $image;
    private $rental;
    private $capacity;

    public function __construct($data)
    {
        $this->carId = isset($data['id']) ? $data['id'] : '';
        $this->manufacturer = $data['manufacturer'];
        $this->model = $data['model'];
        $this->color = $data['color'];
        $this->prodYear = $data['prod-year'];
        $this->transmission = $data['transmission'];
        $this->category = $data['category'];
        $this->image = empty($_FILES['image']['name']) ? '' : $_FILES['image']['name'];
        $this->rental = $data['rental-rate'];
        $this->capacity = $data['capacity'];
    }

    public function verify($action)
    {

        if (
            $this->verifyImage($action) && $this->verifyRental()
            && $this->verifyCategory() && $this->verifyCapacity()
            && $this->verifyProdYear() && $this->verifyTransmission()
        ) {

            $car = new Car(
                $this->manufacturer,
                $this->model,
                $this->color,
                ucfirst($this->category),
                ucfirst($this->transmission),
                $this->prodYear,
                $this->image,
                $this->rental,
                $this->capacity
            );
            $mapper = new CarMapper();

            if ($action == 0) {
                $mapper->insertCar($car);
                return true;
            } else if ($action == 1) {
                if (empty($this->image)) {
                    $car->setImage($mapper->getCarById($this->carId)['image']);
                }
                echo $car->getImage();
                $mapper->updateCar($car, $this->carId);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    private function verifyRental()
    {
        if (
            $this->rental >= 0
            && $this->rental <= 20000
        ) {
            if ($this->emptyCols()) {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    private function emptyCols()
    {
        if (
            empty($this->manufacturer) || empty($this->model) || empty($this->color)
            || ctype_space($this->manufacturer) || ctype_space($this->model)
            || ctype_space($this->color)
        ) {
            return true;
        } else {
            return false;
        }
    }

    private function verifyCategory()
    {
        $categories = array('coupe', 'sedan', 'hatchback', 'suv', 'sport');
        if (in_array($this->category, $categories)) {
            return true;
        } else {
            return false;
        }
    }

    private function verifyProdYear()
    {

        if (
            $this->prodYear <= date('Y')
            && $this->prodYear > 1950
        ) {
            return true;
        } else {
            return false;
        }
    }

    private function verifyCapacity()
    {
        if ($this->capacity < 11 && $this->capacity > 1) {
            return true;
        } else {
            return false;
        }
    }

    private function verifyTransmission()
    {
        $trx = array('automatic', 'manual');
        if (in_array($this->transmission, $trx)) {

            return true;
        } else {
            return false;
        }
    }

    private function verifyImage($action)
    {
        if ($action == 1) {
            if (empty($this->image)) {
                return true;
            }
        }

        if (isset($_FILES['image'])) {

            $imgName =  $_FILES['image']['name'];
            $imgSize =  $_FILES['image']['size'];
            $tmpName =  $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];

            if ($error == 0) {
                if ($imgSize > 20972000) {
                    return false;
                } else {

                    $imgExtension = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
                    $allowedExtensions = array('jpg', 'png', 'jpeg');

                    if (in_array($imgExtension, $allowedExtensions)) {
                        $imgNewName = uniqid('MODEL-', true) . '.' . $imgExtension;
                        $uploadPath = $_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/imgs/models/' . $imgNewName;
                        move_uploaded_file($tmpName, $uploadPath);
                        $this->image = $imgNewName;

                        return true;
                    } else {

                        return false;
                    }
                }
            }
        } else {

            return false;
        }
    }
}
