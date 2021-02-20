<?php
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/contactMapper.php');
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/userMapper.php');
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/rentalMapper.php');
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/serviceMapper.php');

if (isset($_GET['id']) && isset($_GET['table'])) {
    switch ($_GET['table']) {
        case 'user':
            $mapper = new UserMapper();
            $mapper->deleteUser($_GET['id']);
            break;
        case 'car':
            $mapper = new CarMapper();
            $mapper->deleteCar($_GET['id']);
            break;
        case 'rental':
            $mapper = new RentalMapper();
            $mapper->deleteRental($_GET['id']);
            break;
        case 'service':
            $mapper = new ServiceMapper();
            $mapper->deleteService($_GET['id']);
            break;
        case 'contact':
            $mapper = new ContactMapper();
            $mapper->deleteContactForm($_GET['id']);
            break;
    }
    header('Location:../../dashboard/dashboard.php?data=' . $_GET['table']);
}
