<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <h1 class="services-heading">Customer Services</h1>
        <section class="services-container">
            <?php
            include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/serviceMapper.php');
            include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/services/servicesBox.php');
            $mapper = new ServiceMapper();
            $services = $mapper->getAllServices();
            $model = new ServiceBox();
            for ($i = 0; $i < count($services); $i++) {
                $model->addService($services[$i]);
            }
            ?>
        </section>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
</body>

</html>