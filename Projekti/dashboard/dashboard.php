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
                            <option value="policy">Policy</option>
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
                                    $mapper = new UserMapper();
                                    $users = $mapper->getAllUsers();
                                    for ($i = 0; $i < 1; $i++) {
                                        foreach ($users[$i] as $user => $user_d) {
                                            if (!strcmp($user, 'password') == 0) {
                                                $result = str_replace('_', ' ', $user);
                                                echo '<th>' . ucfirst($result)  . '</th>';
                                            }
                                        }
                                    }
                                    echo '<th>Action</th>'
                                    ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while (true)
                                    echo '<tr class="data-row">';

                                echo '</tr>';
                                ?>
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
                                </tr>
                                <tr class="data-row">
                                    <td>riick</td>
                                    <td>Rick</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>
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
</body>

</html>