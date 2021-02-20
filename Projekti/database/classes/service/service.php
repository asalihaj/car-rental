<?php

class Service
{
    private $title;
    private $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function verify()
    {
        if (empty($this->title) || empty($this->description)) {
            return false;
        }
        return true;
    }
}
