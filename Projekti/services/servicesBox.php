<?php

class ServiceBox
{

    private $service;

    public function addService($service)
    {
        $this->service = $service;
        $this->addBox();
    }

    private function addBox()
    {
        echo '<article class="services-box">';
        $this->addHeader();
        $this->addContent();
        echo '</article>';
    }

    private function addHeader()
    {
        echo '<div class="box-header">';
        $this->addIcon();
        $this->addTitle();
        echo '</div>';
    }

    private function addIcon()
    {
        echo '<img class="services-icon" src="../icons/reservation_tab/plus.png" alt="Plus Icon">';
    }

    private function addTitle()
    {
        echo '<h2 class="services-title">' . $this->service['title'] . '</h2>';
    }

    private function addContent()
    {
        echo '<div class="box-text">';
        $this->addDescription();
        echo '</div>';
    }

    private function addDescription()
    {
        echo '<p>' . $this->service['description'] . '</p>';
    }
}
