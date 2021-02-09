<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="dashboard.css?">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <section class="dashboard-container flex-center">
            <!-- <div class="dashboard-panel">
                <div class="dashboard-title">
                    <h2>Dashboard</h2>
                </div>
                <div class="dashboard-data">
                    <ul>
                        <li>Users</li>
                        <li>Models</li>
                        <li>Services</li>
                        <li>Media</li>
                    </ul>
                </div>
            </div> -->
            <div class="tables">
                <select class="table-value" name="data" id="data">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </section>
        <section class="content-container">
            <section class="data-container">
                <div class="tool-holder flex-center">
                    <div class="data-tool">
                        <div class="data-info">
                            <h3>Control Panel -&#160</h3>
                            <h3>Users List</h3>
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
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Age</th>
                                </tr>
                            </thead>
                            <tbody>
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