<?php
include_once('admin.php');
include_once('simpleUser.php');
include_once('userMapper.php');
session_start();

if (isset($_POST['login-submit'])) {
    $login = new LoginValidation($_POST);
    $login->verifyData();
    echo $login;
} else if (isset($_POST['register-submit'])) {
    $register = new RegisterValidation($_POST);
    $register->registerUser();
    header("Location:../main/index.php");
} else {
    header("Location:../main/index.php");
}


class LoginValidation
{
    private $email = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->email = $formData['email'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->email, $this->password)) {
            header("Location:../register/register.php");
        } else if ($this->emailAndPasswordCorrect($this->email, $this->password)) {
            header('Location:../main/index.php');
        } else {
            header("Location:../database/loginValidation.php");
        }
    }

    private function variablesNotDefinedWell($email, $password)
    {
        if (empty($email) || empty($password)) {
            return true;
        }
        return false;
    }

    private function emailAndPasswordCorrect($email, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByEmail($email);
        if ($user == null || count($user) == 0) {
            return false;
        } else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 0) {
                $obj = new Admin($user['id'], $user['email'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['email'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else return false;
    }
}

class RegisterValidation
{
    private $username = "";
    private $email = "";
    private $password = "";
    private $passwordConfirm = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->email = $formData['email'];
        $this->password = $formData['password'];
        $this->passwordConfirm = $formData['password-confirm'];
    }

    public function registerUser()
    {
        if (strcmp($this->password, $this->passwordConfirm) != 0) {
            return -1;
        } else {
            $user = new SimpleUser($this->username, $this->email, $this->password, 0);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
        }
        header("Location:../login/login.php");
    }
}
