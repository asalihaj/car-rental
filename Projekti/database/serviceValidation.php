<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/classes/service/service.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/serviceMapper.php');

if (isset($_POST['service-add'])) {
    $serviceValidation = new ServiceValidation($_POST);
    $serviceValidation->verify(0);
    header('Location:../dashboard/dashboard.php?data=service');
} else if (isset($_POST['service-edit'])) {
    $serviceValidation = new ServiceValidation($_POST);
    $serviceValidation->verify(1);
    header('Location:../dashboard/dashboard.php?data=service');
} else {
    header('Location:../dashboard/dashboard.php?data=service');
}

class ServiceValidation
{

    private $title;
    private $description;
    private $user;

    public function __construct($data)
    {
        $this->serviceId = isset($data['id']) ? $data['id'] : '';
        $this->title = $data['service-title'];
        $this->description = $data['service-desc'];
    }

    public function verify($action)
    {
        $service = new Service($this->title, $this->description);
        if ($service->verify()) {
            $mapper = new ServiceMapper();
            if ($action == 0) {
                $mapper->insertService($service);
            } else if ($action == 1) {
                $mapper->updateService($service, $this->serviceId);
            }
        }
    }
}
