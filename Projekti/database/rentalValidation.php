<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/rentalMapper.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/classes/rental/rental.php');
session_start();

if (isset($_POST['checkout'])) {
    $rental = new RentalValidation();
    $rental->verify();
    header('Location:../main/index.php');
}

class RentalValidation
{

    private $rentalId;
    private $pickUpLoc;
    private $dropOffLoc;
    private $rentalDate;
    private $returnDate;
    private $carId;
    private $userId;
    private $total;

    public function __construct()
    {
        $this->rentalId = isset($_POST['id']) ? $_POST['id'] : "";
        $this->pickUpLoc = $_SESSION['puLocation'];
        $this->dropOffLoc = $_SESSION['doLocation'];
        $this->rentalDate = $_SESSION['puDate'] . ' ' . $_SESSION['puTime'] . ':00';
        $this->returnDate = $_SESSION['doDate'] . ' ' . $_SESSION['doTime'] . ':00';
        $this->carId = $_SESSION['carId'];
        $this->userId = $_SESSION['userId'];
        $this->total = $_SESSION['subTotal'];
    }

    public function verify()
    {
        $rental = new Rental($this->rentalDate, $this->returnDate, $this->pickUpLoc, $this->dropOffLoc, $this->userId, $this->carId, $this->total);
        if ($rental->verify()) {
            $rentalMapper = new RentalMapper();
            $rentalMapper->insertRental($rental);
        }
    }
}
