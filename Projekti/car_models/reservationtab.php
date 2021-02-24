<div class="reservation-tab hidden">
    <div class="inside models-form">
        <form class="reservation-form" action="../reservation/reservation.php" name="car-select-form" id="car-select" method="get">
            <span class="close-tab">×</span>
            <div class="select-car select-car-tab">
                <select name="car-select" required>
                    <?php
                    include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');
                    $mapper = new CarMapper();
                    $cars = $mapper->getAllCars();
                    for ($i = 0; $i < count($cars); $i++) {
                        $carName = ucfirst($cars[$i]['manufacturer']) . ' ' . ucfirst($cars[$i]['model']);
                        echo '<option value="' . $cars[$i]['car_id'] . '">' . $carName . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="pu-location">
                <div class="pick-up" id="iput-res"><img src="../icons/reservation_tab/logo2.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                    <span>Pick up</span>
                    <input type="text" id="pu-place" name="pu-location" placeholder="Enter city or airport: " required>
                </div>
            </div>
            <div class="drop-off"><img src="../icons/reservation_tab/logo2.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                <span id="input-res">Drop-off</span>

                <input type="text" id="do-place" name="do-location" placeholder="Enter city or airport: " required>

            </div>
            <div class="date-reservation">
                <div class="pu-date">
                    <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                    <span>Pick up </span>
                    <input type="date" name="pu-date" id="check-in" <?php echo 'min="' . date('Y-m-d') . '"' ?> onchange="updateDate()" required>
                </div>
                <div class="pu-time" id="time-res">
                    <input type="time" name="pu-time" class="pick-up-time" required>
                </div>
            </div>
            <div class="date-reservation">
                <div class="do-date">
                    <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                    <span>Drop off</span>
                    <input type="date" name="do-date" id="check-out" required>
                </div>
                <div class="do-time" id="time-res">
                    <input type="time" name="do-time" class="drop-off-time" required>
                </div>
            </div>

            <div class="reservation-button">
                <input type="submit" id="submit" name="submit" class="submit" value="CONTINUE CAR RESERVATION">
            </div>
        </form>
    </div>
</div>