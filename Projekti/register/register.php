<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="registerstyle.css?s">
    <title>Register</title>
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <form class="register-form" action="../database/loginValidation.php" method="post">
            <div class="panel">
                <div class="user-data">
                    <label class="register-label">Sign Up</label>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="user-logo" src="../icons/registration/red_user.png" alt="User Icon">
                            <input class="register-component input-area" type="text" name="username" id="username" placeholder="Username" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="email-logo" src="../icons/registration/red_email.png" alt="Mail Icon">
                            <input class="register-component input-area" type="text" name="email" id="email" placeholder="Email" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="pw-logo" src="../icons/registration/red_lock.png" alt="Lock Icon">
                            <input class="register-component input-area" type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="pw-confirm-logo" src="../icons/registration/red_lock.png" alt="Opened Lock">
                            <input class="register-component input-area" type="password" name="password-confirm" id="confirm-password" placeholder="Confirm Password" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                </div>
                <ul id="password-strength" hidden>
                    <p>Password is case sensitive and should have at least:</p>
                    <li id="pw-length">8 charactes</li>
                    <li id="pw-upper">1 upper case letter</li>
                    <li id="pw-lower">1 lower case letter</li>
                    <li id="pw-number">1 number</li>
                    <li id="pw-special">1 special character</li>
                </ul>
                <div class=" register-event">
                    <div class="terms-and-services">
                        <input type="checkbox" name="tos-checkbox" id="tos-checkbox" required>
                        <label for="tos-checkbox">I agree to the <a href="../terms_of_use/terms_of_use.php">Terms
                                and
                                Conditions</a> and the <a href="../privacy_policy/privacy_policy.php">Privacy
                                Policy</a></label>
                    </div>
                    <input class="register-component" id="register-button" name="register-submit" type="submit" value="Continue" disabled>
                </div>
                <div class="register-links">
                    <a href="../Login/login.php">Login</a>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="usernamevalidator.js?d"></script>
    <script src="emailvalidator.js?d"></script>
    <script src="passwordvalidator.js?v"></script>
    <script src="registervalidator.js"></script>
    <script src="registerfunction.js"></script>
    <script src="personalinfo.js"></script>
</body>

</html>