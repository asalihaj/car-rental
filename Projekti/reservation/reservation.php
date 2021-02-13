<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/generic.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="reservation.css?a">
    <title>Reservation</title>
</head>

<body>
    <header>
        <?php
        include('../header/header.php');
        session_start();
        ?>
    </header>
    <main class="flex-center">
        <div class="container">
            <form class="booking-container">
                <div class="location-container">
                    <div class="location-date-info">
                        <div class="location-address-container">
                            <div class="location-address">
                                <h2>Pick Up Location:</h2>
                                <div class="address-info">
                                    <h3><?php
                                        echo isset($_GET['pu-location']) ? $_GET['pu-location'] : 'Error';
                                        ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="date-time-info">
                            <div class="date-container">
                                <div class="date">
                                    <h2>Pick Up Date:</h2>
                                    <div class="date-info">
                                        <h3><?php
                                            echo isset($_GET['pu-date']) ? $_GET['pu-date'] : 'Error';
                                            ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="time-container">
                                <div class="time">
                                    <h2>Time:</h2>
                                    <div class="time-info">
                                        <h3><?php
                                            echo isset($_GET['pu-time']) ? $_GET['pu-time'] : 'Error';
                                            ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-date-info">
                        <div class="location-address-container">
                            <div class="location-address">
                                <h2>Drop Off Location:</h2>
                                <div class="address-info">
                                    <h3><?php
                                        echo isset($_GET['do-location']) ? $_GET['do-location'] : 'Error';
                                        ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="date-time-info">
                            <div class="date-container">
                                <div class="date">
                                    <h2>Drop Off Date:</h2>
                                    <div class="date-info">
                                        <h3><?php
                                            echo isset($_GET['do-date']) ? $_GET['do-date'] : 'Error';
                                            ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="time-container">
                                <div class="time">
                                    <h2>Time:</h2>
                                    <div class="time-info">
                                        <h3><?php
                                            echo isset($_GET['do-time']) ? $_GET['do-time'] : 'Error';

                                            ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rental-price">
                    <table class="price-info">
                        <tr class="pricing-data">
                            <th>Car rental duration:</th>
                            <td><?php
                                $rental_date = explode('-', isset($_GET['pu-date']) ? $_GET['pu-date'] : '-1');
                                $return_date = explode('-', isset($_GET['do-date']) ? $_GET['do-date'] : '-1');
                                echo isset($return_date[2]) && isset($rental_date[2]) ? $return_date[2] - $rental_date[2] : '-1';
                                ?></td>
                        </tr>
                        <tr class="pricing-data">
                            <th>Rental price:</th>
                            <td>$400/day</td>
                        </tr>
                        <tr class="pricing-data">
                            <th>Subtotal:</th>
                            <td>$4600</td>
                        </tr>
                    </table>
                </div>
                <div class="booking-confirm">
                    <div class="pricing-container">
                        <h3>Tax: $440</h3>
                        <h3>Total: $4140</h3>
                    </div>
                    <div class="booking-checkout">
                        <input type="submit" name="checkout" id="checkout" value="CONFIRM">
                    </div>
                </div>
            </form>
            <div class="car-container">
                <div class="car-model">
                    <div class="car-info">
                        <div class="car-name">
                            <h3><?php
                                echo isset($_GET['car-select']) ? $_GET['car-select'] : 'Error';
                                ?></h3>
                        </div>
                        <div class="rental-rate">
                            <h3>$150</h3>
                        </div>
                    </div>
                    <div class="car-img">
                        <img src="../imgs/models/audi_a7_white.png" alt="Car">
                    </div>
                    <div class="car-stats">
                        <ul class="car-specs">
                            <li class="car-specs-info">2018</li>
                            <li class="car-specs-info">Auto</li>
                            <li class="car-specs-info">4 Seats</li>
                            <li class="car-specs-info">Coupe</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>