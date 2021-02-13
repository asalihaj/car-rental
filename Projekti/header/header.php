<div class='header-items'>
    <div class="logo">
        <a href="../main/index.php">
            <img id="main-logo" src="../icons/site_icon2.png" alt="Icon">
            <div class="business-name">
                <h1>Drist</h1>
                <h2>Rent a Car</h2>
            </div>
        </a>
    </div>
    <nav class="header-nav">
        <ul>
            <li class="header-nav-item">
                <a href="../main/index.php">Home</a>
            </li>
            <li class="header-nav-item">
                <a href="../services/services.php">Services</a>
            </li>
            <li class="header-nav-item">
                <a href="../car_models/models.php">Car Models</a>
            </li>
            <li class="header-nav-item">
                <a href="../contact_us/contact_us.php">Contact Us</a>
            </li>
            <?php
            session_start();
            if (!isset($_SESSION['role'])) {
            ?>
                <li class="header-nav-item">
                    <a href="../login/login.php">Login</a>
                </li>
                <?php
            } else if (isset($_SESSION['role'])) {
                if ($_SESSION['role'] == 0) {
                ?>
                    <li class="header-nav-item">
                        <a href="../login/login.php">Panel</a>
                    </li>
                <?php
                }
                ?>

                <li class="header-nav-item">
                    <a href="../login/logout.php">Log out</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>
    <div class="collapsed">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<nav class="collapsed-navbar">
    <ul>
        <li class="collapsed-nav-item">
            <a class="nav-link" href="../main/index.php">Home</a>
        </li>
        <li class="collapsed-nav-item">
            <a class="nav-link" href="../services/services.php">Services</a>
        </li>
        <li class="collapsed-nav-item">
            <a class="nav-link" href="../car_models/models.php">Car Models</a>
        </li>
        <li class="collapsed-nav-item">
            <a class="nav-link" href="../contact_us/contact_us.php">Contact Us</a>
        </li>
        <li class="collapsed-nav-item">
            <a class="nav-link" href="../login/login.php">Login</a>
        </li>
    </ul>
</nav>
<script src="../header/navbar.js?d"></script>