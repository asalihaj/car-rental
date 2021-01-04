<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/generic.css">
    <!-- <link rel="stylesheet" href="../Styles/header.css">
    <link rel="stylesheet" href="../Styles/footer.css"> -->
    <link rel="stylesheet" href="registerstyle.css?a">
    <title>Register</title>
</head>

<body>
    <header>
        <?php
            include("../header/header.html");
        ?>
    </header>
    <main>
        <div class="panel">
            <form class="register-form" action="#">
                <div class="user-data">
                    <label id="register-label">REGISTRATION FORM</label>
                    <div class="user-input">
                        <img id="user-logo" src="../icons/registration/red_user.png" alt="User Icon">
                        <input class="register-component input-area" type="text" name="username" id="username"
                            placeholder="Username" required>
                    </div>
                    <div class="user-input">
                        <img id="email-logo" src="../icons/registration/red_email.png" alt="Mail Icon">
                        <input class="register-component input-area" type="text" name="email" id="email"
                            placeholder="Email" required>
                    </div>
                    <div class="user-input">
                        <img id="pw-logo" src="../icons/registration/red_lock.png" alt="Lock Icon">
                        <input class="register-component input-area" type="password" name="password" id="password"
                            placeholder="Password" required>
                    </div>
                    <div class="user-input">
                        <img id="pw-confirm-logo" src="../icons/registration/red_lock.png" alt="Opened Lock">
                        <input class="register-component input-area" type="password" name="password"
                            id="confirm-password" placeholder="Confirm Password" required>
                    </div>
                    <ul id="password-strength" hidden>
                        <p>Passwords are case sensitive and must contain:</p>
                        <li id="pw-length">At least 8 charactes</li>
                        <li id="pw-upper">At least 1 upper case letter</li>
                        <li id="pw-lower">At least 1 lower case letter</li>
                        <li id="pw-number">At least 1 number</li>
                        <li id="pw-special">At least 1 special character</li>
                    </ul>
                </div>
                <div class=" register-event">
                    <div class="terms-and-services">
                        <input type="checkbox" name="tos-checkbox" id="tos-checkbox">
                        <label for="tos-checkbox">I agree to the <a href="../terms_of_use/terms_of_use.php">Terms
                                and
                                Conditions</a> and the <a href="../privacy_policy/privacy_policy.php">Privacy
                                Policy</a></label>
                    </div>
                    <input class="register-component" id="register-button" type="button" value="REGISTER" disabled>
                </div>
                <div class="register-links">
                    <a href="../Login/login.php">Login</a>
                </div>

            </form>
        </div>

    </main>
    <footer>
        <?php
            include("../footer/footer.html");
        ?>
    </footer>
    <script src="usernamevalidator.js"></script>
    <script src="emailvalidator.js"></script>
    <script src="passwordvalidator.js"></script>
    <script src="registervalidator.js"></script>
</body>

</html>