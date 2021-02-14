<?php
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/classes/user/admin.php');
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/classes/user/simpleUser.php');
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/userMapper.php');
session_start();


if (isset($_POST['login-submit'])) {
    $login = new LoginValidation($_POST);
    $login->verifyData();
} else if (isset($_POST['register-submit'])) {
    $register = new RegisterValidation($_POST);
    $register->registerUser();
    header("Location:../login/login.php");
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
            header("Location:../login/login.php");
        } else if ($this->emailAndPasswordCorrect($this->email, $this->password)) {
            header('Location:../main/index.php');
        } else {
            header("Location:../login/login.php");
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
                $obj = new Admin($user['username'], $user['email'], $user['password']);
                $obj->setSession($user['user_id']);
            } else {
                $obj = new SimpleUser($user['username'], $user['email'], $user['password']);
                $obj->setSession($user['user_id']);
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


    //return -1 if there's a password missmatch
    //return -2 if username/email already exists in database
    public function registerUser()
    {
        if (strcmp($this->password, $this->passwordConfirm) != 0) {
            return -1;
        } else {
            $user = new SimpleUser($this->username, $this->email, $this->password);
            if ($user->validate()) {
                $mapper = new UserMapper();
                $users = $mapper->getAllUsers();
                for ($i = 0; $i < count($users); $i++) {
                    if (
                        strcmp($users[$i]['email'], $this->email) == 0
                        || strcmp($users[$i]['username'], $this->username) == 0
                    ) {
                        return -2;
                    }
                }
                $mapper->insertUser($user);
            }
        }
    }
}
