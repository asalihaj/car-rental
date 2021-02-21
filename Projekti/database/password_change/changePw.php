<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/userMapper.php');

if (isset($_POST['change-pw-submit'])) {
    $password = new PasswordValidate($_POST);
    $password->verify();
    header('Location:../../profile/profile.php');
} else {
    header('Location:../../main/index.php');
}

class PasswordValidate
{
    private $currentPassword;
    private $newPassword;
    private $passwordConfirm;

    public function __construct($data)
    {
        $this->currentPassword = $data['currentpw'];
        $this->newPassword = $data['new-pw'];
        $this->passwordConfirm = $data['confirm-pw'];
    }

    public function verify()
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByID($_SESSION['userId']);

        if (password_verify($this->currentPassword, $user['password'])) {
            if ($this->passwordVerify()) {
                if (strcmp($this->newPassword, $this->passwordConfirm) == 0) {
                    $mapper->updatePassowrd($user['user_id'], $this->newPassword);
                }
            }
        }
    }

    private function passwordVerify()
    {
        if (
            preg_match('/\W+/', $this->newPassword) && preg_match('/[A-Z]+/', $this->newPassword)
            && preg_match('/[a-z]+/', $this->newPassword) && preg_match('/[0-9]+/', $this->newPassword)
            && strlen($this->newPassword) >= 8
        ) {
            return true;
        } else {
            return false;
        }
    }
}
