<?php

class BoxModel
{

    private $car;
    private $index = 0;

    public function addCar($car)
    {
        $this->car = $car;
        $this->box();
    }

    public function box()
    {
        echo '<div class="box-model">';
        $this->mainPanel();
        $this->sidePanel();
        echo '</div>';
    }

    private function mainPanel()
    {
        echo '<div class="main-panel">';
        echo '<div class="car-image flex-mid">';
        echo '<div class="car-info-shrink">';
        echo '<img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(' . $this->index++ . ')">';
        echo '</div>';
        $this->addSpecsTab();
        $this->addInfo();
        $this->addBooking();
        echo '</div>';
    }

    public function addSpecsTab()
    {
        echo '<div class="car-info-tab">';
        echo '<ul class="car-info-list">';
        $this->addSpecTab('Year', $this->car['production_year']);
        $this->addSpecTab('Color', $this->car['color']);
        $this->addSpecTab('Category', $this->car['category']);
        $this->addSpecTab('Transmission', $this->car['transmission']);
        echo '</ul>';
        echo '</div>';
        $this->addImage();
        echo '</div>';
    }

    private function addSpecTab($name, $specification)
    {
        echo '<li class="car-info-item">';
        echo '<h3>' . $name . ': ' . $specification . '</h3>';
        echo '</li>';
    }

    private function addImage()
    {
        $imgSource = '../imgs/models/';
        echo '<img id="audi-a7" class="flex-mid" src="' . $imgSource . $this->car['image'] . '" alt="' .
            $this->car['manufacturer'] . '-' . $this->car['model'] . '">';
    }

    private function addInfo()
    {
        echo '<div class="info">';
        echo '<div class="car-name flex-mid">';
        echo '<h2>' . $this->car['manufacturer'] . ' ' . $this->car['model'] . '</h2>';
        echo '</div>';
        echo '<div class="car-price flex-mid">';
        echo '<h2>$' . $this->car['rental_rate'] . '</h2>';
        echo '<p>/day</p>';
        echo '</div>';
        echo '</div>';
    }

    private function addBooking()
    {
        echo '<div class="book-now flex-mid">';
        echo '<input type="button" name="book-now" value="BOOK NOW">';
        echo '</div>';
    }

    private function sidePanel()
    {
        echo '<div class="side-panel flex-mid column">';
        $this->addSpecs();
        echo '</div>';
    }

    private function addSpecs()
    {
        $this->addSpec('Year', $this->car['production_year']);
        $this->addSpec('Color', $this->car['color']);
        $this->addSpec('Seats', $this->car['capacity']);
        $this->addSpec('Type', $this->car['category']);
        $this->addSpec('Transmission', $this->car['transmission']);
    }

    private function addSpec($name, $specification)
    {
        echo '<div class="additional-info">';
        echo '<h3>' . $name . ': ' . '</h3>';
        echo '<p>'  . $specification . '</p>';
        echo '</div>';
    }
}
