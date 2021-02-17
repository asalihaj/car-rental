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
            ?>
                <li class="header-nav-item profile-nav">
                    <img class="profile-icon" src="../icons/login/3314.png" alt="">
                    <div class="profile-info hidden">
                        <span class="tip"></span>
                        <ul class="acount-nav">
                            <li class="acount-nav-item">
                                <a href="../profile/profile.php">Profile</a>
                            </li>
                            <li class="acount-nav-item">
                                <a href="../login/logout.php">Log out</a>
                            </li>
                        </ul>
                    </div>
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
        <?php
        if (!isset($_SESSION['role'])) {
        ?>
            <li class="collapsed-nav-item">
                <a href="../login/login.php">Login</a>
            </li>
        <?php
        } else if (isset($_SESSION['role'])) {
        ?>
            <li class="collapsed-nav-item">
                <a class="nav-link" href="../profile/profile.php">Profile</a>
            </li>
            <li class="collapsed-nav-item">
                <a class="nav-link" href="../login/logout.php">Log out</a>
            </li>
        <?php
        }
        ?>

    </ul>
</nav>
<?php
if (
    isset($_SESSION['role']) && $_SESSION['role'] == 0
    && strcmp('dashboard.php', basename($_SERVER['PHP_SELF'])) != 0
) {
?>
    <div class="cpanel-container">
        <a class="cpanel" href="../dashboard/dashboard.php">cPanel</a>
    </div>
<?php
}
?>
<script src="../header/navbar.js?"></script>