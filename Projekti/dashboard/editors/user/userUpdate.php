<?php
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/userMapper.php');

if (isset($_POST['user-edit'])) {
    $userEdit = new UserUpdate($_POST);
    $userEdit->editRole();
    header('Location:../../dashboard.php?data=users');
} else {
    header('Location:../../dashboard.php?data=users');
}

class UserUpdate
{
    private $id;
    private $role;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->role = $data['role'];
    }

    public function editRole()
    {
        $mapper = new UserMapper();
        $mapper->updateUser($this->id, $this->role);
    }
}
