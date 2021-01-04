<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="stylesheet" href="style.css?">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/generic.css">
</head>

<body>
    <header>
    <?php
        include("../header/header.html");
    ?>
    </header>
    <div class="center">

        <div class="inside">
            <form class="reservation-form" action="#" method="post" name="car-select-form" id="car-select">
                <!-- Car select start -->
                <div class="select-car">
                    <select name="car-select" id="car-select">
                        <option value="">Select your car type</option>
                        <option value="golf6">Audi A7</option>
                        <option value="golf6">Mercedes S550</option>
                        <option value="golf6">Audi A4</option>
                        <option value="golf6">VW Golf 7</option>
                        <option value="golf6">BMW M5</option>
                        <option value="golf6">Mercedes C300</option>
                        <option value="golf6">Audi Q8</option>
                        <option value="golf6">VW Golf 6</option>
                    </select>
                </div>
                <!-- Car select end -->


                <div class="pu-location">
                    <div class="pick-up" id="iput-res"><img src="../icons/reservation_tab/logo2.png" alt="pick-up"
                            height="20px" class="pick-up-logo" class="pick-up-logo">
                        <span>Pick-up </span>

                        <input type="text" id="pu-place" placeholder="Enter city or airport: ">


                    </div>

                    <div class="drop-off"><img src="../icons/reservation_tab/logo2.png" alt="pick-up" height="20px"
                            class="pick-up-logo" class="pick-up-logo">
                        <span id="input-res">Drop-off</span>

                        <input type="text" id="do-place" placeholder="Enter city or airport: ">

                    </div>
                </div>

                <div class="date-reservation">
                    <div class="pu-date">
                        <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px"
                            class="pick-up-logo" class="pick-up-logo">
                        <span>Pick-up </span>
                        <input type="date">
                    </div>
                    <div class="pu-time" id="time-res">
                        <input type="time" class="pick-up-time">
                        <!-- <select name="pick-up-time" id="pick-up-time">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="01:00 AM">01:00 AM</option>
                            <option value="01:30 AM">01:30 AM</option>
                            <option value="02:00 AM">02:00 AM</option>
                            <option value="02:30 AM">02:30 AM</option>
                            <option value="03:00 AM">03:00 AM</option>
                            <option value="03:30 AM">03:30 AM</option>
                            <option value="04:00 AM">04:00 AM</option>
                            <option value="04:30 AM">04:30 AM</option>
                            <option value="05:00 AM">05:00 AM</option>
                            <option value="05:30 AM">05:30 AM</option>
                            <option value="06:00 AM">06:00 AM</option>
                            <option value="06:30 AM">06:30 AM</option>
                            <option value="07:00 AM">07:00 AM</option>
                            <option value="07:30 AM">07:30 AM</option>
                            <option value="08:00 AM">08:00 AM</option>
                            <option value="08:30 AM">08:30 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="09:30 AM">09:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="01:30 PM">01:30 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="02:30 PM">02:30 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="03:30 PM">03:30 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="04:30 PM">04:30 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                            <option value="05:30 PM">05:30 PM</option>
                            <option value="06:00 PM">06:00 PM</option>
                            <option value="06:30 PM">06:30 PM</option>
                            <option value="07:00 PM">07:00 PM</option>
                            <option value="07:30 PM">07:30 PM</option>
                            <option value="08:00 PM">08:00 PM</option>
                            <option value="08:30 PM">08:30 PM</option>
                            <option value="09:00 PM">09:00 PM</option>
                            <option value="09:30 PM">09:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                        </select> -->
                    </div>
                </div>
                <div class="date-reservation">
                    <div class="do-date">
                        <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px"
                            class="pick-up-logo" class="pick-up-logo">
                        <span>Drop-off</span>
                        <input type="date">
                    </div>
                    <div class="do-time" id="time-res">
                        <input type="time" class="drop-off-time">
                        <!-- <select name="pick-up-time" id="pick-up-time">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="01:00 AM">01:00 AM</option>
                            <option value="01:30 AM">01:30 AM</option>
                            <option value="02:00 AM">02:00 AM</option>
                            <option value="02:30 AM">02:30 AM</option>
                            <option value="03:00 AM">03:00 AM</option>
                            <option value="03:30 AM">03:30 AM</option>
                            <option value="04:00 AM">04:00 AM</option>
                            <option value="04:30 AM">04:30 AM</option>
                            <option value="05:00 AM">05:00 AM</option>
                            <option value="05:30 AM">05:30 AM</option>
                            <option value="06:00 AM">06:00 AM</option>
                            <option value="06:30 AM">06:30 AM</option>
                            <option value="07:00 AM">07:00 AM</option>
                            <option value="07:30 AM">07:30 AM</option>
                            <option value="08:00 AM">08:00 AM</option>
                            <option value="08:30 AM">08:30 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="09:30 AM">09:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="01:30 PM">01:30 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="02:30 PM">02:30 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="03:30 PM">03:30 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="04:30 PM">04:30 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                            <option value="05:30 PM">05:30 PM</option>
                            <option value="06:00 PM">06:00 PM</option>
                            <option value="06:30 PM">06:30 PM</option>
                            <option value="07:00 PM">07:00 PM</option>
                            <option value="07:30 PM">07:30 PM</option>
                            <option value="08:00 PM">08:00 PM</option>
                            <option value="08:30 PM">08:30 PM</option>
                            <option value="09:00 PM">09:00 PM</option>
                            <option value="09:30 PM">09:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                        </select> -->
                    </div>
                </div>

                <div class="reservation-button">
                    <input type="button" id="submit" onclick="myfunction()" class="submit"
                        value="CONTINUE CAR RESERVATION">
                </div>
        </div>

        </form>

        <div class="cover-img">
            <img src="../imgs/models/audi_a7_white.png" alt="Audi A7">
        </div>
    </div>
    <footer>
        <?php
            include("../footer/footer.html");
        ?>
    </footer>
    <script src="main.js"></script>
</body>

</html>