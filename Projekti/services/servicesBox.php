<?php

class ServiceBox
{

    private $service;

    public function addService()
    {
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
?>
<article class="services-box">
    <div class="box-header">
        <img class="services-icon" src="../icons/reservation_tab/plus.png" alt="Plus Icon">
        <h2 class="services-title">One Way Car Rentals</h2>
    </div>
    <div class="box-text">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veritatis dolorum ea quisquam magni,
            provident minima consequuntur. Cum fugit aut explicabo dolorem sequi quos hic, quod quidem aliquid.
            Aspernatur, voluptas.
        </p>
    </div>
</article>