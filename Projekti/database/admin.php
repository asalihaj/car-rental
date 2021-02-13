<?php
include_once('user.php');

class Admin extends User
{
    function __construct($username, $email, $password, $role)
    {
        parent::__construct($username, $email, $password, 2);
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "admin";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
}
