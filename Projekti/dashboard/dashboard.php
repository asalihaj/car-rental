<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    include_once("../database/mappers/userMapper.php");
    ?>
    <link rel="stylesheet" href="dashboard.css?s">
    <link rel="stylesheet" href="editors/editor.css?s">
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
                <form class="data-selection" action="dashboard.php" method="post">
                    <div class="table-info">
                        <label for="data">Select table</label>
                        <select class="table-value" name="data" id="data">
                            <option value="users">Users</option>
                            <option value="cars">Cars</option>
                            <option value="rental">Rental</option>
                            <option value="service">Service</option>
                            <option value="contact">Contact</option>
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
                                if (isset($_POST['data'])) {
                                    echo ucfirst($_POST['data']) . ' Table';
                                    $_SESSION['currentTable'] = $_POST['data'];
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
                                    $table = $_SESSION['currentTable'];
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
                                if (isset($_SESSION['currentTable'])) {
                                    include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/tableMapper.php');
                                    $table = new TableQuery($_SESSION['currentTable']);
                                    $table->getData();
                                }

                                ?>
                                <!-- <tr class="data-row">
                                    <td>riick</td>
                                    <td>Rick</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>
                                <tr class="data-row">
                                    <td>riick</td>
                                    <td>Rick</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>
                                <tr class="data-row">
                                    <td>riick</td>
                                    <td>Rick</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>
                                <tr class="data-row">
                                    <td>riick</td>
                                    <td>Rick</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>
                                <tr class="data-row">
                                    <td>riick</td>
                                    <td>Rick</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="table-footer flex-center">
                        <div class="table-pages">
                            <span class="previous-arrow">&#129120;</span>
                            <div class="page-numbers">
                                <h4>1</h4>
                                <h4>2</h4>
                                <h4>3</h4>
                                <h4>4</h4>
                                <h4>5</h4>
                                <h4>...</h4>
                            </div>
                            <span class="next-arrow">&#129122;</span>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </main>
    <div class="container">
        <form class="editor" action="">
            <?php
            if (isset($_POST['data'])) {
                $data = $_POST['data'];
                switch ($data) {
                    case "users":
                        include("editors/userEditor.php");
                        break;
                    case "cars":
                        include("editors/carEditor.php");
                        break;
                    case "rental":
                        include("editors/rentalEditor.php");
                        break;
                    case "service":
                        include("editors/serviceEditor.php");
                        break;
                    case "policy":
                        include("editors/policyEditor.php");
                        break;
                    case "contact":
                        include("editors/contactEditor.php");
                        break;
                }
            }
            ?>
            <input type="submit" class="edit-submit" name="<?php echo $data ?>-save">
        </form>
    </div>
</body>

</html>