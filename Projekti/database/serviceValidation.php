<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/classes/service/service.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/serviceMapper.php');

if (isset($_POST['service-save'])) {
}

class ServiceValidation
{

    private $title;
    private $description;
    private $user;

    public function __construct($formData)
    {
        $this->title = $formData['service-title'];
        $this->description = $formData['service-desc'];
        $this->user = $_SESSION['userId'];
    }

    public function insert()
    {
        $mapper = new ServiceMapper();
    }
}
