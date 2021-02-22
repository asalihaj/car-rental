<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="../main/style.css">
    <link rel="stylesheet" href="modelstyle.css?">

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
        <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');
        include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/car_models/modelBox.php');
        $mapper = new CarMapper();
        $cars = $mapper->getAllCars();
        $model = new BoxModel();
        for ($i = 0; $i < count($cars); $i++) {
            $model->addCar($cars[$i]);
        }

        ?>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="carinfo.js"></script>
    <script src="bookingtab.js?ss"></script>
</body>

</html>