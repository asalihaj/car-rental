<?php
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/checker.php');

abstract class User
{
    private $username;
    private $email;
    private $password;
    private $role;

    public function __construct($username, $email, $password, $role)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }

    // Function for validating username
    // return 0 if username is valid
    // return -1 if username length is invalid
    // return -2 if username format is invalid
    private function validateUsername()
    {
        if (strlen($this->username) >= 4 && strlen($this->username) <= 25) {
            $pattern = '/^[a-zA-Z0-9]{4,25}$/';
            if (preg_match($pattern, $this->username)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    private function validateEmail()
    {
        $pattern = '/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/';
        if (preg_match($pattern, $this->email)) {
            return true;
        } else {
            return false;
        }
    }

    private function validatePassword()
    {
        if (
            preg_match('/\W+/', $this->password) && preg_match('/[A-Z]+/', $this->password)
            && preg_match('/[a-z]+/', $this->password) && preg_match('/[0-9]+/', $this->password)
            && strlen($this->password) >= 8
        ) {
            return true;
        }
        return false;
    }

    public function validate()
    {
        return $this->validateUsername() && $this->validateEmail()
            && $this->validatePassword();
    }

    abstract protected function setSession($email);

    abstract protected function setCookie();
}
