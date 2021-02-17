<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/generic.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="reservation.css?">
    <title>Reservation</title>
</head>

<body>
    <header>
        <?php
        include('../header/header.php');
        include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');
        if (!isset($_SESSION['userId']) || !isset($_GET['submit'])) {
            header('Location:../login/login.php');
        }
        ?>
    </header>
    <main class="flex-center">
        <div class="container">
            <form class="booking-container" action="../database/rentalValidation.php" method="post">
                <div class="location-container">
                    <div class="location-date-info">
                        <div class="location-address-container">
                            <div class="location-address">
                                <h2>Pick Up Location:</h2>
                                <div class="address-info">
                                    <h3><?php
                                        $_SESSION['puLocation'] = isset($_GET['pu-location']) ? $_GET['pu-location'] : '';
                                        echo $_SESSION['puLocation'];
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
                                            $_SESSION['puDate'] = isset($_GET['pu-date']) ? $_GET['pu-date'] : '';
                                            echo $_SESSION['puDate'];
                                            ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="time-container">
                                <div class="time">
                                    <h2>Time:</h2>
                                    <div class="time-info">
                                        <h3><?php
                                            $_SESSION['puTime'] = isset($_GET['pu-time']) ? $_GET['pu-time'] : '';
                                            echo $_SESSION['puTime'];
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
                                        $_SESSION['doLocation'] = isset($_GET['do-location']) ? $_GET['do-location'] : '';
                                        echo $_SESSION['doLocation'];
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
                                            $_SESSION['doDate'] = isset($_GET['do-date']) ? $_GET['do-date'] : '';
                                            echo $_SESSION['doDate'];
                                            ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="time-container">
                                <div class="time">
                                    <h2>Time:</h2>
                                    <div class="time-info">
                                        <h3><?php
                                            $_SESSION['doTime'] = isset($_GET['do-time']) ? $_GET['do-time'] : '';
                                            echo $_SESSION['doTime'];
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
                                $totalDays = isset($return_date[2]) && isset($rental_date[2]) ? $return_date[2] - $rental_date[2] : '-1';
                                echo $totalDays;
                                $_SESSION['totalDays'] = $totalDays;
                                ?></td>
                        </tr>
                        <tr class="pricing-data">
                            <th>Rental price:</th>
                            <td><?php
                                if (isset($_GET['car-select'])) {
                                    $mapper = new CarMapper();
                                    $car = $mapper->getCarById($_GET['car-select']);
                                    echo $car['rental_rate'] . '/day';
                                } else {
                                    echo 'Null';
                                }
                                ?></td>
                        </tr>
                        <tr class="pricing-data">
                            <th>Subtotal:</th>
                            <td><?php
                                $mapper = new CarMapper();
                                $car = $mapper->getCarById($_GET['car-select']);
                                $subTotal = $_SESSION['totalDays'] * $car['rental_rate'];
                                echo '$' . $subTotal;
                                $_SESSION['subTotal'] = $subTotal;
                                ?></td>
                        </tr>
                    </table>
                </div>
                <div class="booking-confirm">
                    <div class="pricing-container">
                        <h3><?php
                            // echo 'Tax: ' . $_SESSION['subTotal'] * 0.1;
                            echo 'Tax: --';
                            ?></h3>
                        <h3><?php
                            echo 'Total: $' . $_SESSION['subTotal'];
                            ?></h3>
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

                                if (isset($_GET['submit'])) {
                                    $mapper = new CarMapper();
                                    $car = $mapper->getCarById($_GET['car-select']);
                                    echo $car['manufacturer'] . ' ' . $car['model'];
                                    $_SESSION['carId'] = $_GET['car-select'];
                                } else {
                                    echo '<i>Empty</i>';
                                }
                                ?></h3>
                        </div>
                        <div class="rental-rate">
                            <h3><?php
                                if (isset($_GET['submit'])) {
                                    $mapper = new CarMapper();
                                    $car = $mapper->getCarById($_GET['car-select']);
                                    echo '$' . $car['rental_rate'];
                                } else {
                                    echo 'Null';
                                }
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="car-img">
                        <img src="../imgs/models/audi_a7_white.png" alt="Car">
                    </div>
                    <div class="car-stats">
                        <ul class="car-specs">
                            <?php
                            if (isset($_GET['submit'])) {
                                $mapper = new CarMapper();
                                $car = $mapper->getCarById($_GET['car-select']);
                                echo '<li class="car-specs-info">' . $car['production_year'] . '</li>';
                                echo '<li class="car-specs-info">' . $car['transmission'] . '</li>';
                                echo '<li class="car-specs-info">' . $car['capacity'] . '</li>';
                                echo '<li class="car-specs-info">' . $car['category'] . '</li>';
                            } else {
                                echo '<li class="car-specs-info">Null</li>';
                                echo '<li class="car-specs-info">Null</li>';
                                echo '<li class="car-specs-info">Null</li>';
                                echo '<li class="car-specs-info">Null</li>';
                            }
                            ?>
                            <!-- <li class="car-specs-info">2018</li>
                            <li class="car-specs-info">Auto</li>
                            <li class="car-specs-info">4 Seats</li>
                            <li class="car-specs-info">Coupe</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>