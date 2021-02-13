<?php
include_once('user.php');

class SimpleUser extends User
{
    public function __construct($username, $email, $password, $role)
    {
        parent::__construct($username, $email, $password, 1);
    }

    public function setSession()
    {
        $_SESSION['role'] = '1';
        $_SESSION['roleName'] = 'user';
    }

    public function setCookie()
    {
        setcookie('username', $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
}
