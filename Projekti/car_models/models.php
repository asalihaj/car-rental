<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="modelstyle.css">
    <link rel="stylesheet" href="../main/style.css">
    <title>Models</title>
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main class="models">
        <?php
        include('reservationtab.php');
        ?>
        <div class="title">
            <h1>OUR MODELS</h1>
        </div>
        <div class="box-model">
            <div class="main-panel">
                <div class="car-image flex-mid">
                    <div class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(0)">
                    </div>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="audi-a7" class="flex-mid" src="../imgs/models/audi_a7_white.png" alt="">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>Audi A7</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$150</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <a class="flex-mid" href="../reservation/reservation.php">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2018</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>Light gray</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>Coupe</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Automatic</p>
                </div>
            </div>
        </div>
        <div class="box-model">
            <div class="main-panel">
                <div class="car-image flex-mid">
                    <span class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(1)">
                    </span>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2019</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="mercedes-s550" class="flex-mid" src="../imgs/models/mercedes_s550_black.png" alt="">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>Mercedes S550</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$180</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <!-- To be implemented on phase 2 -->
                    <a class="flex-mid" href="#">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2019</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>Light black</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>Coupe</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Automatic</p>
                </div>
            </div>
        </div>
        <div class="box-model">
            <div class="main-panel">

                <div class="car-image flex-mid">
                    <span class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(2)">
                    </span>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2018</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="audi-a4" class="flex-mid" src="../imgs/models/audi_a4_2019_navy.png" alt="">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>Audi A4</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$90</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <!-- To be implemented on phase 2 -->
                    <a class="flex-mid" href="#">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2017</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>Navy</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>Coupe</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Automatic</p>
                </div>
            </div>
        </div>
        <div class="box-model">
            <div class="main-panel">
                <div class="car-image flex-mid">
                    <span class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(3)">
                    </span>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2017</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="golf-7" class="flex-mid" src="../imgs/models/golf_7_white.png" alt="">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>VW Golf 7</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$100</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <!-- To be implemented on phase 2 -->
                    <a class="flex-mid" href="#">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2020</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>White</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>Hatchback</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Automatic</p>
                </div>
            </div>
        </div>
        <div class="box-model">
            <div class="main-panel">
                <div class="car-image flex-mid">
                    <span class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(4)">
                    </span>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2016</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="bmw-m5" class="flex-mid" src="../imgs/models/bmw_m5_white.png" alt="">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>BMW M5</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$170</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <!-- To be implemented on phase 2 -->
                    <a class="flex-mid" href="#">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2019</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>White</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>Coupe</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Automatic</p>
                </div>
            </div>
        </div>
        <div class="box-model">
            <div class="main-panel">
                <div class="car-image flex-mid">
                    <span class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(5)">
                    </span>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2015</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="mercedes-c300" class="flex-mid" src="../imgs/models/mercedes_c300_gray.png" alt="">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>Mercedes C300</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$140</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <!-- To be implemented on phase 2 -->
                    <a class="flex-mid" href="#">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2019</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>Gray</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>Sedan</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Automatic</p>
                </div>
            </div>
        </div>
        <div class="box-model">
            <div class="main-panel">
                <div class="car-image flex-mid">
                    <span class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(6)">
                    </span>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2014</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="audi-q8" class="flex-mid" src="../imgs/models/audi_q8_white.png" alt="Audi Q8">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>Audi Q8</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$200</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <!-- To be implemented on phase 2 -->
                    <a class="flex-mid" href="#">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2020</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>White</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>SUV</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Automatic</p>
                </div>
            </div>
        </div>
        <div class="box-model">
            <div class="main-panel">
                <div class="car-image flex-mid">
                    <span class="car-info-shrink">
                        <img class="car-info-icon" src="../icons/car-models/info.png" alt="Info" onclick="info(7)">
                    </span>
                    <div class="car-info-tab">
                        <ul class="car-info-list">
                            <li class="car-info-item">
                                <h3>Year: 2013</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Color: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Seats: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Type: 2020</h3>
                            </li>
                            <li class="car-info-item">
                                <h3>Transmission: 2020</h3>
                            </li>
                        </ul>
                    </div>
                    <img id="golf-6" class="flex-mid" src="../imgs/models/golf_6_dark_grey.png" alt="">
                </div>
                <div class="info">
                    <div class="car-name flex-mid">
                        <h2>VW Golf 6</h2>
                    </div>
                    <div class="car-price flex-mid">
                        <h2>$70</h2>
                        <p>/day</p>
                    </div>
                </div>
                <div class="book-now flex-mid">
                    <!-- To be implemented on phase 2 -->
                    <a class="flex-mid" href="#">BOOK NOW</a>
                </div>
            </div>
            <div class="side-panel flex-mid column">
                <div class="additional-info">
                    <h3>Year:</h3>
                    <p>2017</p>
                </div>
                <div class="additional-info">
                    <h3>Color:</h3>
                    <p>Black</p>
                </div>
                <div class="additional-info">
                    <h3>Seats:</h3>
                    <p>4</p>
                </div>
                <div class="additional-info">
                    <h3>Type:</h3>
                    <p>Hatchback</p>
                </div>
                <div class="additional-info">
                    <h3>Transmission:</h3>
                    <p>Manual</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="addmodel.js?s"></script>
</body>

</html>