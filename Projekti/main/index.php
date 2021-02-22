<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="style.css?a">
    <link rel="stylesheet" href="sliderstyle.css">
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <div class="center">

            <div class="inside">
                <form class="reservation-form" action="../reservation/reservation.php" name="car-select-form" id="car-select" method="get">
                    <div class="select-car">
                        <select name="car-select" required>
                            <option value="">Select your car type</option>
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
                        <span><a href="../car_models/models.php">View all models</a></span>
                    </div>
                    <!-- Car select end -->
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
                            <input type="date" id="check-in" name="pu-date" <?php echo 'min="' . date('Y-m-d') . '"' ?> onchange="updateDate()" required>
                        </div>
                        <div class="pu-time" id="time-res">
                            <input type="time" name="pu-time" class="pick-up-time" required>
                        </div>
                    </div>
                    <div class="date-reservation">
                        <div class="do-date">
                            <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                            <span>Drop off</span>
                            <input type="date" id="check-out" name="do-date" required>
                        </div>
                        <div class="do-time" id="time-res">
                            <input type="time" name="do-time" class="drop-off-time" required>
                        </div>
                    </div>

                    <div class="reservation-button">
                        <input type="submit" name="submit" id="submit" class="submit" value="CONTINUE CAR RESERVATION">
                    </div>
                </form>
            </div>



            <div class="cover-img">
                <span class="slider-car-name">
                    <h1 id="car-name">Test</h1>
                </span>
                <span class="slider-back"><img src=" icons/arrow-left.png" alt="Left Arrow"></span>
                <div class="slider-imgs">
                    <?php
                    include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');
                    $mapper = new CarMapper();
                    $cars = $mapper->getAllCars();
                    for ($i = 0; $i < count($cars); $i++) {
                        $carName = ucfirst($cars[$i]['manufacturer']) . ' ' . ucfirst($cars[$i]['model']);
                        $hidden = $i == 0 ? '' : ' hidden';
                        echo '<img src="../imgs/models/' . $cars[$i]['image'] . '" class="slider-img' . $hidden . '" alt="' . $carName . '">';
                    }
                    ?>

                </div>
                <span class="slider-next"><img src="icons/arrow-right.png" alt="Right Arrow"></span>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="main.js?a"></script>
    <script src="slider.js?"></script>
</body>

</html>