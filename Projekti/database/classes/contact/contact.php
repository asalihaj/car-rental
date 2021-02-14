<?php

class Contact
{
    private $name;
    private $email;
    private $message;


    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function validate()
    {
        return $this->validateEmail() && $this->validateName();
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

    private function validateName()
    {
        $pattern = '/^[a-zA-Z ]+$/';
        if (preg_match($pattern, $this->name)) {
            return true;
        } else {
            return false;
        }
    }
}
