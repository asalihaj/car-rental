<div class="inside">
    <form class="reservation-form" action="../reservation/reservation.php" name="car-select-form" id="car-select" method="get">
        <!-- Car select start -->
        <div class="select-car">
            <select name="car-select" id="car-select">
                <option value="">Select your car type</option>
                <option value="Audi A7">Audi A7</option>
                <option value="Mercedes S550">Mercedes S550</option>
                <option value="Audi A4">Audi A4</option>
                <option value="Golf 7">VW Golf 7</option>
                <option value="BMW M5">BMW M5</option>
                <option value="Mercedes C300">Mercedes C300</option>
                <option value="Audi Q8">Audi Q8</option>
                <option value="VW Golf 6">VW Golf 6</option>
            </select>
            <span><a href="../car_models/models.php">View all models</a></span>
        </div>
        <!-- Car select end -->
        <div class="pu-location">
            <div class="pick-up" id="iput-res"><img src="../icons/reservation_tab/logo2.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                <span>Pick up</span>
                <input type="text" id="pu-place" name="pu-location" placeholder="Enter city or airport: ">


            </div>
        </div>
        <div class="drop-off"><img src="../icons/reservation_tab/logo2.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
            <span id="input-res">Drop-off</span>

            <input type="text" id="do-place" name="do-location" placeholder="Enter city or airport: ">

        </div>
        <div class="date-reservation">
            <div class="pu-date">
                <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                <span>Pick up </span>
                <input type="date" name="pu-date">
            </div>
            <div class="pu-time" id="time-res">
                <input type="time" name="pu-time" class="pick-up-time">
            </div>
        </div>
        <div class="date-reservation">
            <div class="do-date">
                <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                <span>Drop off</span>
                <input type="date" name="do-date">
            </div>
            <div class="do-time" id="time-res">
                <input type="time" name="do-time" class="drop-off-time">
            </div>
        </div>

        <div class="reservation-button">
            <input type="submit" id="submit" onclick="myfunction()" class="submit" value="CONTINUE CAR RESERVATION">
        </div>
</div>