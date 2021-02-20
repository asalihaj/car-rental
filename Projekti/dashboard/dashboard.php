<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    include_once("../database/mappers/userMapper.php");
    ?>
    <link rel="stylesheet" href="dashboard.css?">
    <link rel="stylesheet" href="editors/editor.css?sx">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        if (!isset($_SESSION['userId']) || $_SESSION['role'] != 0) {
            header('Location:../main/index.php');
        }
        ?>
    </header>
    <main>
        <section class="dashboard-container flex-center">
            <div class="tables">
                <form class="data-selection" action="dashboard.php" method="get">
                    <div class="table-info">
                        <label for="data">Select table</label>
                        <select class="table-value" name="data" id="data">
                            <?php
                            $tables = array(
                                "users" => "Users",
                                "cars" => "Cars",
                                "rental" => "Rental",
                                "service" => "Service",
                                "contact" => "Contact",
                            );
                            if (isset($_GET['data'])) {
                                echo '<option value="' . $_GET['data'] . '">' . ucfirst($_GET['data']) . '</option>';
                                foreach ($tables as $key => $value) {
                                    if (!strcmp($key, $_GET['data']) == 0) {
                                        echo '<option value="' . $key . '">' . $value . '</option>';
                                    }
                                }
                            } else {
                                foreach ($tables as $key => $value) {
                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <input class="data-search-btn" type="submit" value="Go">
                </form>
            </div>
        </section>
        <section class="content-container">
            <section class="data-container">
                <div class="tool-holder flex-center">
                    <div class="data-tool">
                        <div class="data-info">
                            <h3>
                                <?php
                                if (isset($_GET['data'])) {
                                    echo ucfirst($_GET['data']) . ' Table';
                                }
                                ?>
                            </h3>
                        </div>
                        <div class="data-search">
                            <input class="search-bar" type="text" placeholder="Search">
                            <button class="search-button">
                                <div class="search-icon">&#9906;</div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-statistics">

                    <div class="data-display">
                        <table class="data">
                            <thead>
                                <tr class="data-header">
                                    <?php
                                    $table = isset($_GET['data']) ? $_GET['data'] : 'users';
                                    switch ($table) {
                                        case "users":
                                            include('rows/userRows.php');
                                            break;
                                        case "cars":
                                            include('rows/carRows.php');
                                            break;
                                        case "rental":
                                            include('rows/rentalRows.php');
                                            break;
                                        case "service":
                                            include('rows/serviceRows.php');
                                            break;
                                        case "contact":
                                            include('rows/contactRows.php');
                                            break;
                                    }
                                    ?>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/tableMapper.php');
                                if (isset($_GET['data'])) {

                                    $table = new TableQuery($_GET['data']);
                                    $table->getData();
                                } else {
                                    $table = new TableQuery('users');
                                    $table->getData();
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-footer flex-center">
                        <div class="table-pages">
                            <img class="add" src="../icons/add.png" <?php
                                                                    if (isset($_GET['data'])) {
                                                                        if (
                                                                            strcmp($_GET['data'], 'users') == 0 ||
                                                                            strcmp($_GET['data'], 'rental') == 0 ||
                                                                            strcmp($_GET['data'], 'contact') == 0
                                                                        ) {
                                                                            echo 'hidden';
                                                                        }
                                                                    } else {
                                                                        echo 'hidden';
                                                                    }
                                                                    ?>>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <div class="container hidden">

        <?php
        if (isset($_GET['data'])) {
            $_SESSION['changeSource'] = 'add';
            $data = $_GET['data'];
            switch ($data) {
                case "cars":
                    include("editors/car/carEditor.php");
                    break;
                case "service":
                    include("editors/service/serviceEditor.php");
                    break;
                case "users":
                    include("editors/user/userEditor.php");
                    break;
                case "rental":
                    include("editors/rental/rentalEditor.php");
                    break;
                case "contact":
                    include("editors/contact/contactEditor.php");
                    break;
            }
        }
        ?>

    </div>
    <script src="dashboard.js?"></script>
    <script src="editors/editor.js"></script>
</body>

</html>